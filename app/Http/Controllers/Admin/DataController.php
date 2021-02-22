<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\XisController;
use App\Models\{
    Admin\Menu,
    Admin\Table,
    Admin\TableField,
};

class DataController extends XisController
{
    protected $per_page = 50;

    public function __construct(Request $request)
    {
        $this->per_page = $request->has('per-page') ? $request->get('per-page') : $this->per_page;
    }

    public function getList(Request $request, Table $table)
    {
        $Blueprints = self::getBlueprintsFromTable($table)['db'];
        $_model_withs = [];
        $_filters = [];
        if ($request->has('filters')) {
            $_filters = json_decode($request->get('filters'), true);
        }

        foreach ($Blueprints->fields as $field) {
            if ($field->type->id != 10) continue;

            foreach ($field->joins as $_join) {
                if (!$_join->rightField) continue;
                if (!$_join->rightField->table) continue;

                if (method_exists((new $Blueprints->model), $_join->model_foreign_function)) {
                    $_model_withs[] = mb_strtolower($_join->model_foreign_function);
                } else {
                    if ($_join->leftField) {
                        $_func_name = str_replace('_id', '', $_join->leftField->name);

                        if (method_exists((new $Blueprints->model), $_func_name)) {
                            $_model_withs[] = mb_strtolower($_func_name);

                            \DB::table('db_table_field_joins')
                                ->where('relation_type_id', $_join->relation_type_id)
                                ->where('local_field_id', $_join->local_field_id)
                                ->where('remote_field_id', $_join->remote_field_id)
                                ->where('remote_field_id', $_join->remote_field_id)
                                ->update(
                                    [
                                        'model_foreign_function' => $_func_name
                                    ]
                                );
                            $_join->model_foreign_function = $_func_name;
                        } else {
                            // dd($_join->leftField);
                        }
                    } else {
                        // dd($_join->leftField);
                    }
                    // dd($_join->leftField);
                }
            }
        }

        $Data = (new $Blueprints->model);

        if (count($_model_withs)) {
            $Data = $Data->with($_model_withs);
        }

        // dd($Blueprints->model, $_model_withs);

        if ($request->has('limiters')) {
            $_limiters = $request->get('limiters');

            if (substr_count($_limiters, '-')) {
                if (substr($_limiters, 0, 1) == '-') {
                    $_limiters = substr($_limiters, 1);
                }

                if (substr($_limiters, -1) == '-') {
                    $_limiters = substr($_limiters, 0, -1);
                }
                
                $_limiters = explode('-', $_limiters);

                if (count($_limiters)) {
                    foreach ($_limiters as $_limiter) {
                        $_limiter_params = explode(':', $_limiter);
                        
                        if (isset($_limiter_params[0]) && isset($_limiter_params[1])) {
                            $_limiter_field_id = $_limiter_params[0];
                            $_limiter_field_value = $_limiter_params[1];

                            // Percorre todos os campos vendo se o ID do campo bate com o do limitador
                            foreach ($Blueprints->fields as $field) {
                                if (($field->id != $_limiter_field_id) && $field->type->id != 10) continue;
                                if ($field->joins) {
                                    foreach ($field->joins as $_join) {
                                        if ($_join->remote_field_id == $_limiter_field_id) {
                                            $Data->whereHas("{$_join->model_foreign_function}", function ($q) use ($_join, $_limiter_field_value) {
                                                $q->where($_join->rightField->name, $_limiter_field_value);
                                            });
                                        }
                                    }
                                }
                            }
                        }

                    }
                }
            }
        }

        if (isset($_filters['simpleSearch'])) {
            $Data = $Data->where(function ($q) use ($Blueprints, $_filters) {
                foreach ($Blueprints->fields as $field) {
                    if (!in_array($field->type->id, [2, 3, 6, 15, 16])) continue;
    
                    $_simple_search = mb_strtolower(trim($_filters['simpleSearch']));
    
                    if (mb_strlen($_simple_search)) {
                        $q->orWhereRaw("LOWER({$field->name}) LIKE '%$_simple_search%'");
                    }
                }
            });
        }

        if (isset($_filters['fieldSearches'])) {
            $Data = $Data->where(function ($q) use ($Blueprints, $_filters) {
                $_organized_f_search = [];
                foreach ($_filters['fieldSearches'] as $_f_search) {
                    if (is_null($_f_search)) continue;
                    $_organized_f_search[$_f_search['id']][] = $_f_search['value'];
                }

                if (count($_organized_f_search)) {
                    foreach ($_organized_f_search as $_f_field_id => $_searched_values) {
                        foreach ($Blueprints->fields as $field) {
                            if ($field->id != $_f_field_id) continue;
    
                            $q->where(function ($q) use ($field, $_searched_values) {
                                switch (true) {
                                    case ($field->type->is_numeric): {
                                        $q->whereIn($field->name, $_searched_values);
                                    } break;
                                    default: {
                                        foreach ($_searched_values as $_searched_value) {
                                            if (mb_strlen($_searched_value)) {
                                                $q->orWhereRaw("{$field->name} LIKE '%{$_searched_value}%'");
                                            }
                                        }
                                    } break;
                                }
                            });
                        }
                    }
                }
            });
        }

        if (isset($_filters['booleanFilters'])) {
            $Data = $Data->where(function ($q) use ($Blueprints, $_filters) {
                foreach ($_filters['booleanFilters'] as $_b_search) {
                    foreach ($Blueprints->fields as $field) {
                        if ($field->id != $_b_search['id']) continue;

                        if (!is_null($_b_search['value'])) {
                            $q->where($field->name, (!!$_b_search['value']));
                        }
                    }
                }
            });
        }

        if (isset($_filters['fkFieldSearches'])) {
            $Data = $Data->where(function ($q) use ($Blueprints, $_filters, $_model_withs) {
                foreach ($_filters['fkFieldSearches'] as $_fk_search) {
                    if (!is_array($_fk_search['value'])) continue;
                    if (!count($_fk_search['value'])) continue;

                    foreach ($Blueprints->fields as $field) {
                        if ($field->id != $_fk_search['id']) continue;

                        if ($field->joins) {
                            foreach ($field->joins as $_join) {
                                if ($_join->local_field_id != $field->id) continue;

                                $q->whereHas($_join->model_foreign_function, function ($q) use ($Blueprints, $_filters, $_join, $_fk_search) {
                                    $q->whereIn($_join->rightField->name, $_fk_search['value']);
                                });
                            }
                        }
                    }
                }
            });
        }

        if ($request->has('order-by')) {
            $_orderBy = json_decode($request->get('order-by'), true);

            if (is_array($_orderBy)) {
                foreach ($_orderBy as $_order) {
                    if (!$_order['order']) continue;

                    foreach ($Blueprints->fields as $field) {
                        if ($field->id != $_order['fieldId']) continue;
    
                        $_ORDER = (($_order['order'] == 1) ? 'ASC' : 'DESC');
                        
                        // dd($field->name, $_ORDER);
    
                        $Data = $Data->orderBy($field->name, $_ORDER);
                    }
    
                }
            }
        }

        if ($Blueprints->primaryKeys) {
            foreach ($Blueprints->primaryKeys as $primaryKey) {
                $Data = $Data->orderBy($primaryKey->name, 'desc');
            }
        }
        $Data = $Data->paginate($this->per_page);

        return response()->json($Data, 200);
    }

    public function getListOfOptionsByTable(Request $request, Table $table, TableField $visibleField = null)
    {
        $Blueprints = self::getBlueprintsFromTable($table)['db'];

        $selectFields = [];

        foreach ($Blueprints->primaryKeys as $pk) {
            $selectFields[] = \DB::raw("{$pk->name} AS id");
        }

        if ($visibleField) {
            if ($visibleField->table->id == $table->id) {
                $selectFields[] = \DB::raw("{$visibleField->name} AS value");
            } else {
                $_first_text_field = null;
                foreach ($Blueprints->fields as $field) {
                    if (!in_array($field->type_id, [2, 3])) continue;
                    if ($_first_text_field) continue;
                    $_first_text_field = $field;
                }

                if ($_first_text_field) {
                    $selectFields[] = \DB::raw("{$_first_text_field->name} AS value");
                }
            }
        } else {
            $_first_text_field = null;
            foreach ($Blueprints->fields as $field) {
                if (!in_array($field->type_id, [2, 3])) continue;
                if ($_first_text_field) continue;
                $_first_text_field = $field;
            }

            if ($_first_text_field) {
                $selectFields[] = \DB::raw("{$_first_text_field->name} AS value");
            }
        }

        $Data = (new $table->model)
            ->select($selectFields)
            ->where(function ($q) use ($request, $Blueprints) {
                if ($request->has('limiters')) {
                    $_limiters = $request->get('limiters');
        
                    if (substr_count($_limiters, '-')) {
                        if (substr($_limiters, 0, 1) == '-') {
                            $_limiters = substr($_limiters, 1);
                        }
        
                        if (substr($_limiters, -1) == '-') {
                            $_limiters = substr($_limiters, 0, -1);
                        }
                        
                        $_limiters = explode('-', $_limiters);
        
                        if (count($_limiters)) {
                            foreach ($_limiters as $_limiter) {
                                $_limiter_params = explode(':', $_limiter);

                                if (isset($_limiter_params[0]) && isset($_limiter_params[1])) {
                                    $_limiter_field_id = $_limiter_params[0];
                                    $_limiter_field_value = $_limiter_params[1];
        
                                    // Percorre todos os campos vendo se o ID do campo bate com o do limitador
                                    foreach ($Blueprints->fields as $field) {
                                        if ($field->id == $_limiter_field_id) {
                                            $q->where($field->name, $_limiter_field_value);
                                        } else if ($field->type->id == 10) {
                                            if ($field->joins) {
                                                foreach ($field->joins as $_join) {
                                                    if ($_join->remote_field_id == $_limiter_field_id) {
                                                        $Data->whereHas("{$_join->model_foreign_function}", function ($q) use ($_join, $_limiter_field_value) {
                                                            $q->where($_join->rightField->name, $_limiter_field_value);
                                                        });
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            })
            ->get();

        return response()->json($Data, 200);
    }

    public function getDataByMenu(Request $request, $menu_hash, $ids)
    {
        $Menu = Menu::with(['table'])
            ->where('menu_url_hash', $menu_hash)
            ->first();
            
        if (!$Menu) return response()->json(null, 404);

        $Table = $Menu->table;

        $IDs = self::clearIdValues($ids);

        $Data = (new $Table->model)
            ->where(function ($q) use ($IDs, $Table) {
                foreach ($IDs as $ID) {
                    if (!$ID['value']) {
                        $q->whereRaw("1=0");
                    }
                    
                    foreach ($Table->fields as $field) {
                        if ($field->id != $ID['field_id']) continue;

                        $q->where($field->name, $ID['value']);
                    }
                }
            })
            ->get();

        if ($Data->isNotEmpty()) {
            $Data = $Data->first();

            return response()->json($Data, 200);
        }

        return response()->json(null, 404);
    }

    private static function clearIdValues($ids)
    {
        $organized = [];

        if (substr($ids, 0, 1) == '-') {
            $ids = substr($ids, 1);
        }

        if (substr($ids, -1) == '-') {
            $ids = substr($ids, 0, -1);
        }

        $ids = explode('-', $ids);

        foreach ($ids as $id) {
            $_values = explode(':', $id);

            $organized[] = [
                'field_id' => $_values[0],
                'value' => $_values[1]
            ];
        }

        return $organized;
    }

    /**
     * UPDATE
     */
    public function updateByTable(Request $request, Table $table)
    {
        $_wait = 2;
        $_start_update_at = time();

        $validate_rules = [];

        foreach ($table->fields as $field) {
            if (!$field->primary_key) continue;

            $validate_rules[$field->name] = ['required'];

            if ($field->type->name == 'bigint') {
                $validate_rules[$field->name][] = "exists:{$table->database->name}.{$table->name}";
            }
        }

        foreach ($table->fields as $field) {
            if ($field->primary_key) continue;
            if (!$field->editable) continue;

            if (!isset($validate_rules[$field->name])) {
                $validate_rules[$field->name] = [];
            }

            if ($field->not_null) {

                if ($field->conditional_field_id) {
                    $ConditionalField = TableField::find($field->conditional_field_id);

                    if ($ConditionalField) {
                        if ($request->has($ConditionalField->name)) {
                            $validate_rules[$field->name][] = 'required';
                        }
                    }
                } else {
                    $validate_rules[$field->name][] = 'required';
                }
            }

            if ($field->email) {
                $validate_rules[$field->name][] = 'email';
            }

            if ($field->unique) {
                if ($request->has('id')) {
                    $validate_rules[$field->name][] = \Illuminate\Validation\Rule::unique("{$table->database->name}.{$table->name}")->ignore($request->get('id'));
                }
            }
        }

        $_valid_data = $request->validate($validate_rules);

        $Data = (new $table->model)->where(function ($q) use ($table, $request) {
            foreach ($table->fields as $field) {
                if (!$field->primary_key) continue;

                $q->where($field->name, $request->get($field->name));
            }
        })
            ->get();

        if ($Data->isNotEmpty()) {
            if ($Data->count() == 1) {
                $Data = $Data->first();

                $_updates = [];

                foreach ($table->fields as $field) {
                    if ($field->primary_key) continue;
                    if (!$field->editable) continue;
    
                    if ($request->has($field->name)) {
                        switch (true) {
                            case ($field->type->is_password): {
                                $_new_value = trim($request->get($field->name));

                                /**
                                 * Criar mais regras de validacao de senha aqui
                                 */
                                if (strlen($_new_value)) {
                                    $_updates[$field->name] = $_new_value;
                                }
                            } break;

                            case ($field->type->is_boolean): {
                                $_new_value = $request->get($field->name);

                                if (is_bool($_new_value)) {
                                    $_updates[$field->name] = $_new_value;
                                } else if (is_numeric($_new_value)) {
                                    $_updates[$field->name] = (!!$_new_value);
                                } else if (is_string($_new_value)) {
                                    if (mb_strtolower($_new_value) == 'true') {
                                        $_updates[$field->name] = true;
                                    } else if (mb_strtolower($_new_value) == 'false') {
                                        $_updates[$field->name] = false;
                                    }
                                }
                            } break;

                            default: {
                                $_new_value = $request->get($field->name);
                                $_updates[$field->name] = $_new_value;
                            } break;
                        }
                    }
                }

                if ((time() - $_start_update_at) < $_wait) {
                    // sleep($_wait);
                }

                if (count($_updates)) {
                    if ($Data->update($_updates)) {
                        return response()->json($Data, 200);
                    }
                }

                return response()->json($_valid_data, 200);
            }

            return response()->json(['error' => "Counld not find single key for table {$table->name}"], 404);
        } else if ($table->type->name == 'join_n_m') {
            /**
             * Inserindo registro em uma tabela de ligacao
             */
            return $this->insertByTable($request, $table);
        } else {
            return response()->json(["error" => "Nothing to update"], 403);
        }

    }

    public function insertByTable(Request $request, Table $table)
    {

        $_wait = 2;
        $_start_update_at = time();

        $validate_rules = [];

        foreach ($table->fields as $field) {
            if ($field->primary_key && !$field->editable) continue;

            if (!isset($validate_rules[$field->name])) {
                $validate_rules[$field->name] = [];
            }

            if ($field->not_null) {

                if ($field->conditional_field_id) {
                    $ConditionalField = TableField::find($field->conditional_field_id);

                    if ($ConditionalField) {
                        if ($request->has($ConditionalField->name)) {
                            $validate_rules[$field->name][] = 'required';
                        }
                    }
                } else {
                    $validate_rules[$field->name][] = 'required';
                }
            }

            if ($field->email) {
                $validate_rules[$field->name][] = 'email';
            }

            if ($field->unique) {
                $validate_rules[$field->name][] = "unique:{$table->database->name}.{$table->name}";
            }
        }

        $_valid_data = $request->validate($validate_rules);

        if ((new $table->model)->insert($_valid_data)) {
            return response()->json($_valid_data, 200);
        } else {
            return response()->json($_valid_data, 403);
        }
    }
}
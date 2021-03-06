<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\XisController;
use Auth;
use App\Models\{
    Admin\Menu,
    Admin\Table,
    Admin\TableField,
};
use App\Exports\{
    TableExportArray,
    TableExportCollection,
};
use Maatwebsite\Excel\Facades\Excel;

class DataController extends XisController
{
    protected $_DEFAULT_STORAGE_DISK = 'local';
    protected $per_page = 50;
    private const RETURN_LIST = null;
    private const RETURN_RESULT = 1;
    private const RETURN_QUERY = 2;
    private const RETURN_ARRAY = 3;

    public function __construct(Request $request)
    {
        $this->per_page = $request->has('per-page') ? $request->get('per-page') : $this->per_page;
    }

    public function getList(Request $request, Table $table, $getRaw = null)
    {
        $Blueprints = self::getBlueprintsFromTable($table)['db'];
        $_model_withs = [];
        $_filters = [];
        if ($request->has('filters')) {
            $_filters = json_decode($request->get('filters'), true);
        }

        foreach ($Blueprints->fields as $field) {
            if (!in_array($field->type->name, ['foreign'])) continue;

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
            $_limiters = self::clearIdValues($request->get('limiters'));

            if (count($_limiters)) {
                foreach ($_limiters as $_limiter) {
                
                    $_limiter_field_id = $_limiter['field_id'];
                    $FilterField = TableField::find($_limiter_field_id);
                    $_limiter_field_value = $_limiter['value'];

                    if ($FilterField) {
                        // Percorre todos os campos vendo se o ID do campo bate com o do limitador
                        foreach ($Blueprints->fields as $field) {
                            if (($field->id != $FilterField->id) && (!$field->primary_key) && (!in_array($field->type->name, ['foreign']))) continue;

                            if ($field->id == $FilterField->id) {
                                $Data = $Data->where("{$field->table->name}.{$field->name}", $_limiter_field_value);
                            }

                            if ($field->joins) {
                                foreach ($field->joins as $_join) {
                                    if ($_join->remote_field_id == $FilterField->id) {
                                        $Data->whereHas("{$_join->model_foreign_function}", function ($q) use ($_join, $_limiter_field_value) {
                                            $q->where($_join->rightField->name, $_limiter_field_value);
                                        });
                                    }
                                }
                            }
                        }

                        foreach ($Blueprints->joinedTables as $joinedTable) {
                            if ($joinedTable->rightTable) {
                                if ($joinedTable->rightTable->manyToManyTables) {
                                    foreach ($joinedTable->rightTable->manyToManyTables as $manyToManyTable) {
                                        if ($manyToManyTable->pivotTable) {
                                            foreach ($manyToManyTable->pivotTable->fields as $pivot_t_field) {
                                                if ($pivot_t_field->id == $FilterField->id) {
                                                    // Vincular todas as tabelas relacionadas ate aqui
                                                    $Data->whereHas("{$joinedTable->right_table_object}", function ($q) use ($manyToManyTable, $FilterField, $_limiter_field_value) {
                                                        $withMethod = str_replace(' ', '', ucwords(str_replace('_', ' ', $manyToManyTable->pivot_table_name)));

                                                        if (method_exists( (new $manyToManyTable->mTable->model), $withMethod )) {
                                                            $q->whereHas($withMethod, function ($q) use ($manyToManyTable, $FilterField, $_limiter_field_value) {
                                                                foreach ($manyToManyTable->pivotTable->fields as $fields) {
                                                                    if ($fields->id == $FilterField->id) {
                                                                        $q->where($fields->name, $_limiter_field_value);
                                                                    }
                                                                }
                                                            });
                                                        }
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
        }

        if (isset($_filters['simpleSearch'])) {
            $Data = $Data->where(function ($q) use ($Blueprints, $_filters) {
                foreach ($Blueprints->fields as $field) {
                    if (!in_array($field->type->name, ['character', 'text', 'str_fa_icon', 'md5', 'string', 'json'])) continue;
    
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

        if ($getRaw) {
            switch ($getRaw) {
                case 1: {
                    return $Data->get();
                } break;
                case 2: {
                    return $Data;
                } break;
                case 3: {
                    return $Data->get()->toArray();
                } break;
            }
        } else {
            if ($this->per_page) {
                $Data = $Data->paginate($this->per_page);
            } else {
                $Data = $Data->get();
            }
            return response()->json($Data, 200);
        }
    }

    public function getData(Request $request, Table $table)
    {
        $Blueprints = self::getBlueprintsFromTable($table)['db'];
        $_model_withs = [];
        $_filters = [];
        if ($request->has('filters')) {
            $_filters = json_decode($request->get('filters'), true);
        }

        foreach ($Blueprints->fields as $field) {
            if (!in_array($field->type->name, ['foreign'])) continue;

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
        
        $_SELECT_FIELDS = [];
        $_ORDER_FIELDS = [];

        foreach ($Blueprints->fields as $_field) {
            if (!$_field->primary_key) continue;

            $_SELECT_FIELDS[] = \DB::raw("{$Blueprints->name}.{$_field->name}");
        }

        foreach ($Blueprints->fields as $_field) {
            if ($_field->primary_key) continue;
            if (!$_field->not_null) continue;

            $_SELECT_FIELDS[] = \DB::raw("{$Blueprints->name}.{$_field->name}");
            $_ORDER_FIELDS[] = "{$Blueprints->name}.{$_field->name}";
        }

        foreach ($Blueprints->fields as $_field) {
            if ($_field->primary_key) continue;
            if ($_field->not_null) continue;
            if (!$_field->editable) continue;

            $_SELECT_FIELDS[] = \DB::raw("{$Blueprints->name}.{$_field->name}");
        }

        if (count($_model_withs)) {
            $Data = $Data->with($_model_withs);
        }

        if ($Blueprints->relatedTables->count()) {
            foreach ($Blueprints->relatedTables as $relatedTable) {
                $Data = $Data->leftJoin(
                    $relatedTable->rightTable->name, 
                    "{$relatedTable->rightTable->name}.{$relatedTable->jointField->leftField->name}",
                    '=',
                    "{$relatedTable->leftTable->name}.{$relatedTable->jointField->rightField->name}",
                );

                foreach ($relatedTable->rightTable->fields as $_r_field) {
                    if ( (!$_r_field->primary_key) && (!$_r_field->not_null) && (!$_r_field->editable)) continue;

                    $_SELECT_FIELDS[] = \DB::raw("{$relatedTable->rightTable->name}.{$_r_field->name} AS {$relatedTable->rightTable->name}_{$_r_field->name}");

                    if ((!$_r_field->primary_key) && ($_r_field->not_null)) {
                        $_ORDER_FIELDS[] = "{$relatedTable->rightTable->name}.{$_r_field->name}";
                    }
                }
                // dd($relatedTable);
            }
        }

        $Data = $Data->select($_SELECT_FIELDS);

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
                                if (($field->id != $_limiter_field_id) && (!in_array($field->type->name, ['foreign']))) continue;
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
                    if (!in_array($field->type->name, ['character', 'text', 'str_fa_icon', 'md5', 'string', 'json'])) continue;
    
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
        } else {
            if (count($_ORDER_FIELDS)) {
                foreach ($_ORDER_FIELDS as $_ordered_field) {
                    $Data = $Data->orderBy($_ordered_field, 'ASC');
                }
            }
        }

        if ($Blueprints->primaryKeys) {
            foreach ($Blueprints->primaryKeys as $primaryKey) {
                $Data = $Data->orderBy($primaryKey->name, 'desc');
            }
        }

        return $Data->get();
    }

    public function downloadList(Request $request, Table $table)
    {
        $User = Auth::user();
        $path = "public/exports/{$User->id}/$table->id/excel";
        $_time = time();
        $filename = "Export_{$table->name}_{$_time}.xlsx";
        $Data = $this->getData($request, $table);

        $export = new TableExportCollection($table, $Data);

        Excel::store($export,  "{$path}/{$filename}", $this->_DEFAULT_STORAGE_DISK, null, [
            'visibility' => 'public',
        ]);

        if (\Storage::disk($this->_DEFAULT_STORAGE_DISK)->exists("{$path}/{$filename}")) {
            return response()->json([
                'status' => 1,
                'filename' => $filename,
                'download' => \Config::get('app.url') . \Storage::disk($this->_DEFAULT_STORAGE_DISK)->url("{$path}/{$filename}")
            ]);
        }

        return response()->json(null, 403);
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
                    $_limiters = self::clearIdValues($request->get('limiters'));

                    if (count($_limiters)) {
                        foreach ($_limiters as $_limiter) {
                        
                            $_limiter_field_id = $_limiter['field_id'];
                            $FilterField = TableField::find($_limiter_field_id);
                            $_limiter_field_value = $_limiter['value'];

                            if ($FilterField) {
                                // Percorre todos os campos vendo se o ID do campo bate com o do limitador
                                foreach ($Blueprints->fields as $field) {
                                    if (($field->id != $FilterField->id) && (!$field->primary_key) && (!in_array($field->type->name, ['foreign']))) continue;

                                    if ($field->id == $FilterField->id) {
                                        $q->where("{$field->table->name}.{$field->name}", $_limiter_field_value);
                                    }
                                    
                                    if ($field->joins) {
                                        foreach ($field->joins as $_join) {
                                            if ($_join->remote_field_id == $FilterField->id) {
                                                $q->whereHas("{$_join->model_foreign_function}", function ($q) use ($_join, $_limiter_field_value) {
                                                    $q->where($_join->rightField->name, $_limiter_field_value);
                                                });
                                            }
                                        }
                                    }
                                }

                                foreach ($Blueprints->joinedTables as $joinedTable) {
                                    if ($joinedTable->rightTable) {
                                        if ($joinedTable->rightTable->manyToManyTables) {
                                            foreach ($joinedTable->rightTable->manyToManyTables as $manyToManyTable) {
                                                if ($manyToManyTable->pivotTable) {
                                                    foreach ($manyToManyTable->pivotTable->fields as $pivot_t_field) {
                                                        if ($pivot_t_field->id == $FilterField->id) {
                                                            // Vincular todas as tabelas relacionadas ate aqui
                                                            $q->whereHas("{$joinedTable->right_table_object}", function ($q) use ($manyToManyTable, $FilterField, $_limiter_field_value) {
                                                                $withMethod = str_replace(' ', '', ucwords(str_replace('_', ' ', $manyToManyTable->pivot_table_name)));

                                                                if (method_exists( (new $manyToManyTable->mTable->model), $withMethod )) {
                                                                    $q->whereHas($withMethod, function ($q) use ($manyToManyTable, $FilterField, $_limiter_field_value) {
                                                                        foreach ($manyToManyTable->pivotTable->fields as $fields) {
                                                                            if ($fields->id == $FilterField->id) {
                                                                                $q->where($fields->name, $_limiter_field_value);
                                                                            }
                                                                        }
                                                                    });
                                                                }
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
                }
            })
            ->get();

        return response()->json($Data, 200);
    }

    public function getDataByMenu(Request $request, $menu_hash, $ids)
    {
        $_model_withs = [];
        $Menu = Menu::with(['table'])
            ->where('menu_url_hash', $menu_hash)
            ->first();
            
        if (!$Menu) return response()->json(null, 404);

        $Table = $Menu->table;

        $IDs = self::clearIdValues($ids);

        if (!$Table) return response()->json(['error' => "Invalid Model for Menu", 'model' => $Table, 'menu' => $Menu], 403);

        foreach ($Table->fields as $field) {
            // !in_array($field->type->name, ['character', 'text', 'str_fa_icon', 'md5', 'string', 'json'])
            if (!in_array($field->type->name, ['foreign'])) continue;

            foreach ($field->joins as $_join) {
                if (!$_join->rightField) continue;
                if (!$_join->rightField->table) continue;

                if (method_exists((new $Table->model), $_join->model_foreign_function)) {
                    $_model_withs[] = mb_strtolower($_join->model_foreign_function);
                } else {
                    if ($_join->leftField) {
                        $_func_name = str_replace('_id', '', $_join->leftField->name);

                        if (method_exists((new $Table->model), $_func_name)) {
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
            });

        if (count($_model_withs)) {
            $Data = $Data->with($_model_withs);
        }

        $ids = self::clearIdValues($ids);

        if (count($ids)) {
            foreach ($ids as $_filter_id) {
                $FilterField = TableField::find($_filter_id['field_id']);
                $FilterValue = $_filter_id['value'];

                if ($FilterField) {
                    foreach ($Table->fields as $field) {
                        if (!$field->primary_key) continue;

                        if ($field->id == $FilterField->id) {
                            $Data = $Data->where("{$field->table->name}.{$field->name}", $FilterValue);
                        } else {
                            if ($FilterField->joins->count()) {
                                foreach ($FilterField->joins as $_f_joined_field) {
                                    if (in_array($field->id, [
                                        $_f_joined_field->leftField->id,
                                        $_f_joined_field->rightField->id
                                    ])) {
                                        $Data = $Data->where("{$field->table->name}.{$field->name}", $FilterValue);
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        $Data = $Data
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

            if (isset($_values[0]) && isset($_values[1])) {
                $organized[] = [
                    'field_id' => $_values[0],
                    'value' => $_values[1]
                ];
            }
        }

        return $organized;
    }

    /**
     * UPDATE
     */
    public function updateByTable(Request $request, Table $table)
    {
        $_wait = 1;
        $_start_update_at = time();

        $validate_rules = [];

        switch ($table->type->name) {
            case 'join_1_1': {
                dd('1x1');
            } break;

            case 'join_1_n': {
                dd('join_1_n');
            } break;

            case 'join_n_m': {
                foreach ($table->fields as $field) {
                    if (!$field->primary_key) continue;
        
                    $validate_rules[$field->name] = ['required'];
        
                    if ($field->type->name == 'bigint') {
                        $validate_rules[$field->name][] = "exists:{$table->database->name}.{$table->name}";
                    }
                }

                $_valid_data = $request->validate($validate_rules);

                $TableData = (new $table->model)->where(function ($q) use ($_valid_data) {
                    foreach ($_valid_data as $field => $value) {
                        $q->where($field, $value);
                    }
                })
                    ->count();

                if (!$TableData) {
                    return $this->insertByTable($request, $table);
                }

                dd('join_n_m', $_valid_data);
            } break;

            case 'join_n_m_map': {
                dd('join_n_m_map');
            } break;

            default: {
                // dd('aqui oh', 'default', $table->type->name, $table->name);
            } break;
        }

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
                    sleep($_wait);
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
        $_wait = 1;
        $_start_insert_at = time();

        // Inderts diferentes para cada tipo de tabela
        switch ($table->type->name) {
            case 'join_n_m_map': {
                $_inserts = [];

                foreach ($table->joinedTables as $joinedTable) {
                    if ($request->has($joinedTable->right_table_object)) {
                        $right_data = $request->get($joinedTable->right_table_object);
                        if (isset($right_data[$joinedTable->right_table_field_name])) {
                            $_inserts[$joinedTable->left_table_field_name] = $right_data[$joinedTable->right_table_field_name];
                        }
                    }
                }

                if ((new $table->model)->insert($_inserts)) {
                    return response()->json($_inserts, 200);
                } else {
                    return response()->json(['error' => 'Could not insert data'], 403);
                }
            } break;

            default: {
                $validate_rules = [];

                foreach ($table->fields as $field) {
                    if ($field->primary_key && !$field->editable) continue;
        
                    if (!isset($validate_rules[$field->name])) {
                        $validate_rules[$field->name] = [];
                    }
        
                    if ($field->not_null) {
                        if (($field->type->name == 'md5') && (!$field->fillable) && (!$field->editable)) continue;
        
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
        
                foreach ($table->fields as $field) {
                    if ($field->not_null && ($field->type->name == 'md5') && (!$field->fillable) && (!$field->editable)) {
                        $prefix = explode('_', $field->table->name);
                        $prefix = $prefix[count($prefix) - 1];
                        $prefix = mb_strtoupper(substr($prefix, 0, 1));
        
                        $_valid_data[$field->name] = self::generateUnicDbHash($field->table->name, $field->name, $prefix, $field->max_length);
                    }
                }
        
                if ((new $table->model)->insert($_valid_data)) {
                    if ((time() - $_start_insert_at) < $_wait) {
                        sleep($_wait - ( (INT) date('s', (time() - $_start_insert_at)) ));
                    }
        
                    return response()->json($_valid_data, 200);
                } else {
                    return response()->json($_valid_data, 403);
                }
            }
        }
    }

    public function deleteByTable(Request $request, Table $table)
    {
        $_start_delete_at = time();
        $_wait = 1;
        // Cada tipo de tabela vai ter um delete diferente
        switch ($table->type->name) {
            case 'join_n_m_map': {
                // monta os withs da tabela
                $_model_withs = [];
                foreach ($table->fields as $field) {
                    // !in_array($field->type->name, ['character', 'text', 'str_fa_icon', 'md5', 'string', 'json'])
                    if (!in_array($field->type->name, ['foreign'])) continue;
        
                    foreach ($field->joins as $_join) {
                        if (!$_join->rightField) continue;
                        if (!$_join->rightField->table) continue;
        
                        if (method_exists((new $table->model), $_join->model_foreign_function)) {
                            $_model_withs[] = mb_strtolower($_join->model_foreign_function);
                        } else {
                            if ($_join->leftField) {
                                $_func_name = str_replace('_id', '', $_join->leftField->name);
        
                                if (method_exists((new $table->model), $_func_name)) {
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

                if (!count($_model_withs)) return response()->json(['error' => 'Could not identify key fields'], 403);

                $where_data = $request->get('data');

                $DataQ = (new $table->model)
                    ->where(function ($q) use ($_model_withs, $where_data) {
                        foreach ($_model_withs as $_model_with) {
                            $q->whereHas($_model_with, function ($q) use ($_model_with, $where_data) {
                                if (isset($where_data[$_model_with])) {
                                    foreach ($where_data[$_model_with] as $_field => $_value) {
                                        $q->where($_field, $_value);
                                    }
                                }
                            });
                        }
                    });

                $Data = $DataQ
                    ->get();

                if ($Data->count() === 1) {
                    $Data = $Data->first();

                    if ($DataQ->delete()) {
                        if ((time() - $_start_delete_at) < $_wait) {
                            sleep($_wait);
                        }
                        return response()->json($Data, 200);
                    } else {
                        if ((time() - $_start_delete_at) < $_wait) {
                            sleep($_wait);
                        }
                        return response()->json(['error' => 'Could not delete data'], 403);
                    }
                } else {
                    return response()->json(['error' => 'Could not identify unique data to delete'], 403);
                }
            } break;

            default: {
                return response()->json(['message' => 'Nothing done'], 200);
            } break;
        }
    }
}
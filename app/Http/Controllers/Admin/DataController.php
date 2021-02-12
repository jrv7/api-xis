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
        $Blueprints = self::getBlueprintsFromTable($table);
        
        $_model_withs = [];

        foreach ($Blueprints->fields as $field) {
            if ($field->type->id != 10) continue;

            foreach ($field->joins as $_join) {
                if (!$_join->rightField) continue;
                if (!$_join->rightField->table) continue;

                $_model_withs[] = mb_strtolower($_join->model_foreign_function);
            }
        }

        $Data = (new $Blueprints->model);

        if (count($_model_withs)) {
            $Data = $Data->with($_model_withs);
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
        $Blueprints = self::getBlueprintsFromTable($table);

        $selectFields = [];

        foreach ($Blueprints->primaryKeys as $pk) {
            $selectFields[] = \DB::raw("{$pk->name} AS id");
        }

        if ($visibleField) {
            $selectFields[] = \DB::raw("{$visibleField->name} AS value");
        } else {
            $_first_text_field = null;
            foreach ($Blueprints->fields as $field) {
                if (!in_array($field->type_id, [2, 3])) continue;
                if ($_first_text_field) continue;
                $_first_text_field = $field;
            }
            $selectFields[] = \DB::raw("{$_first_text_field} AS value");
        }

        $Data = (new $table->model)
            ->select($selectFields)
            ->get();

        return response()->json($Data, 200);
    }
}
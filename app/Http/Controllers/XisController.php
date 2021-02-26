<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\{
    Admin\Menu,
    Admin\Table,
    Admin\Dictionary,
};

class XisController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getBlueprintsByMenu(Request $request, $menu_hash)
    {
        $Menu = Menu::where('menu_url_hash', $menu_hash)
            ->first();

        if (!$Menu) return response()->json([], 404);
    
        $_return = [
            'crudType' => $Menu->route,
            'db' => null
        ];

        $_return['db'] = self::getBlueprint($Menu->table_id);

        return $_return;
    }

    protected static function getBlueprintsFromTable(Table $table)
    {
        return [
            'db' => self::getBlueprint($table->id)
        ];
    }

    private static function getBlueprint($table_id)
    {
        return Table::with([
                'primaryKeys.type',
                'listActions',
                'listActions.menu',
                'listActions.menu.fatherMenu',
                'listActions.menu.fatherMenu.fatherMenu',
                'manyToManyTables',
                'manyToManyTables.pivotTable',
                'manyToManyTables.nTable',
                'relatedTables',
                'relatedTables.leftTable',
                'relatedTables.rightTable',
                'relatedTables.rightTable.fields',
                'relatedTables.jointField',
                'relatedTables.jointField.leftField',
                'relatedTables.jointField.rightField',
                'relatedTables.jointMenu',
                'relatedTables.jointMenu.fatherMenu',
                'relatedTables.jointMenu.fatherMenu.fatherMenu',
                'type', 
                'database', 
                'fields',
                'fields.table',
                'fields.type',
                'fields.joins',
                'fields.joins.rightField',
                'fields.joins.rightField.table',
                'fields.joins.visibleField',
                'fields.joins.visibleField.table',
            ])
            ->findOrFail($table_id);
    }
}

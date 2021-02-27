<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Auth;
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

        if (!$_return['db']) {
            return response()->json(['error' => "Could not access table {$Menu->table_id}. Permission not granted"], 401);
        }

        return $_return;
    }

    protected static function getBlueprintsFromTable(Table $table)
    {
        $_return = [
            'db' => self::getBlueprint($table->id)
        ];

        if (!$_return['db']) {
            return response()->json(['error' => "Could not access table {$table->id}. Permission not granted"], 401);
        }

        return $_return;
    }

    private static function getBlueprint($table_id)
    {
        $User = Auth::user();
        $return = Table::with([
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
            ->select('db_tables.*')
            ->join('role_has_permissions_in_tables AS rpt', 'rpt.table_id', '=', 'db_tables.id')
            ->join('permissions', 'permissions.id', '=', 'rpt.permission_id')
            ->join('roles', 'roles.id', '=', 'rpt.role_id')
            ->join('user_has_roles AS ur', 'ur.role_id', '=', 'roles.id')
            ->join('users', function ($q) use ($User) {
                $q->on('users.id', '=', 'ur.user_id');
                $q->where('users.id', $User->id);
            })
            ->whereIn('permissions.name', [
                'read'
            ])
            ->groupBy('db_tables.id')
            ->find($table_id);

        if ($return) {
            return $return;
        } else {
            return null;
        }
    }
}

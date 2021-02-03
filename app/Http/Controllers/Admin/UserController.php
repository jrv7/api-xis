<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function getMainMenus(Request $request)
    {
        $Roles = $request->user()->roles;

        $_main_menus = [];

        if (count($Roles)) {
            foreach ($Roles as $role) {
                $RoleMenus = $role->menus()
                    ->where('system_id', 1)
                    ->whereNull('father_menu_id')
                    ->get();
                
                if ($RoleMenus->isNotEmpty()) {
                    foreach ($RoleMenus as $_menu) {
                        $_main_menus[] = $_menu->toArray();
                    }
                }
            }
        }
        return response()->json($_main_menus, 200);
    }
}

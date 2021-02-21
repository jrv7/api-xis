<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Admin\Menu};

class UserController extends Controller
{
    public function getMainMenus(Request $request)
    {
        $Roles = $request->user()->roles;

        $_main_menus = [];

        if (count($Roles)) {
            foreach ($Roles as $role) {
                $RoleMenus = $role->menus()
                    ->with(
                        [
                            'actions.targetMenu',
                            'children.actions.targetMenu',
                            'children.children.actions.targetMenu',
                        ]
                    )
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

    public function getSubmenus(Request $request, $mainMenuHash, $recursive = false)
    {
        $Roles = $request->user()->roles;

        $_main_menus = [];

        $mainMenu = Menu::where('menu_url_hash', $mainMenuHash)
            ->get();
        if ($mainMenu->isNotEmpty()) {
            $mainMenu = $mainMenu->first();
    
            if (count($Roles)) {
                foreach ($Roles as $role) {
                    $RoleMenus = $role->menus()
                        ->where('system_id', 1)
                        ->where('father_menu_id', $mainMenu->id)
                        ->get();
                    
                    if ($RoleMenus->isNotEmpty()) {
                        foreach ($RoleMenus as $_menu) {
                            $_menu->load(['fatherMenu']);

                            if ($_menu->fatherMenu) {
                                $_menu->fatherMenu->load(['fatherMenu']);
                            }
                            
                            $_menu_data = $_menu->toArray();
    
                            $_menu_data['submenus'] = $this->getSubmenus($request, $_menu->menu_url_hash, true);
    
                            $_main_menus[] = $_menu_data;
                        }
                    }
                }
            }
        }
    
        if ($recursive) {
            return $_main_menus;
        } else {
            return response()->json($_main_menus, 200);
        }
    }
}

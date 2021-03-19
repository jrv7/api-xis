<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\{Admin\Menu};
use Auth;

class UserController extends Controller
{
    public function getSession(Request $request)
    {
        if (Auth::check()) {
            return response()->json($request->user()->load(
                [
                    'systems', 
                    'defaultMenu.system'
                ]
            ), 200);
        } else {
            return response()->json(null, 401);
        }
    }
    public function getMainMenus(Request $request)
    {
        $User = $request->user();
        $Roles = $User->roles;

        $_main_menus = [];

        if (count($Roles)) {
            foreach ($Roles as $role) {
                $RoleMenus = $role->menus()
                    ->with(
                        [
                            'actions.targetMenu',
                            'actions.targetMenu.system',
                            'children.actions.targetMenu',
                            'children.actions.targetMenu.system',
                            'children.system',
                            'children.children.actions.targetMenu',
                            'children.children.system',
                            'system',
                        ]
                    )
                    ->whereIn('system_id', $User->systems->pluck('id'))
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
        $User = $request->user();
        $Roles = $User->roles;

        $_main_menus = [];

        $mainMenu = Menu::with(['system'])
            ->where('menu_url_hash', $mainMenuHash)
            ->get();
        if ($mainMenu->isNotEmpty()) {
            $mainMenu = $mainMenu->first();
    
            if (count($Roles)) {
                foreach ($Roles as $role) {
                    $RoleMenus = $role->menus()
                        ->with(['system'])
                        ->where('system_id', $User->systems->pluck('id'))
                        ->where('father_menu_id', $mainMenu->id)
                        ->get();
                    
                    if ($RoleMenus->isNotEmpty()) {
                        foreach ($RoleMenus as $_menu) {
                            $_menu->load(['system', 'fatherMenu.system']);

                            if ($_menu->fatherMenu) {
                                $_menu->fatherMenu->load(['system', 'fatherMenu.system']);
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

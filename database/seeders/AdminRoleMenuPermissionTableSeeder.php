<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminRoleMenuPermissionTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'role_has_menu_has_permission';
        
        \DB::table($tableName)->delete();

        $_menus = \DB::table('menus')->get();

        $_insert_menu_roles = [];

        if ($_menus->isNotEmpty()) {
            foreach ($_menus as $_menu) {
                $_insert_menu_roles[] = [
                    'menu_id' => $_menu->id,
                    'role_id' => 1,
                    'permission_id' => 2,
                    'target_menu_id' => (($_menu->id == 6) ? 7 : null)
                ];
            }
        }
        
        if (count($_insert_menu_roles)) {
            \DB::table($tableName)->insert($_insert_menu_roles);
        }
    }
}
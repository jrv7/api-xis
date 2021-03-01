<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminGiveRolePermissionsToMenus extends XisSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::statement("INSERT INTO role_has_menus (role_id, menu_id)
                        SELECT 
                            1 AS role_id,
                            m.id
                        FROM menus m
                        LEFT JOIN role_has_menus rm ON rm.menu_id = m.id
                        WHERE rm.menu_id IS NULL ");
    }
}

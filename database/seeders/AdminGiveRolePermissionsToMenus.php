<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminGiveRolePermissionsToMenus extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \DB::statement("INSERT INTO role_menu (role_id, menu_id)
                        SELECT 
                            1 AS role_id,
                            m.id
                        FROM menus m
                        LEFT JOIN role_menu rm ON rm.menu_id = m.id
                        WHERE rm.menu_id IS NULL ");
    }
}

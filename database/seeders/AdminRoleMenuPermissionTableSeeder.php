<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRoleMenuPermissionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'role_menu_permission';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'menu_id' => 6,
                'permission_id' => 2,
                'menu_id_target' => 7,
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminRoleMenuTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'role_has_menus';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'menu_id' => 8,
            ),
            1 => 
            array (
                'role_id' => 1,
                'menu_id' => 9,
            ),
            2 => 
            array (
                'role_id' => 1,
                'menu_id' => 6,
            ),
            3 => 
            array (
                'role_id' => 1,
                'menu_id' => 15,
            ),
        ));
        
        
    }
}
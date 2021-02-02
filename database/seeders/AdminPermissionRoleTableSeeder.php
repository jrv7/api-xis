<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminPermissionRoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'permission_role';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'permission_id' => 2,
                'role_id' => 1,
            ),
            1 => 
            array (
                'permission_id' => 3,
                'role_id' => 1,
            ),
            2 => 
            array (
                'permission_id' => 4,
                'role_id' => 1,
            ),
            3 => 
            array (
                'permission_id' => 1,
                'role_id' => 1,
            ),
        ));
        
        
    }
}
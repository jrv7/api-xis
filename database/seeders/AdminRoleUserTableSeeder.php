<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminRoleUserTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'user_has_roles';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'role_id' => 1,
                'user_id' => 1
            ),
        ));
        
        
    }
}
<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminPermissionUserTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'user_has_permissions';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'permission_id' => 2,
                'user_id' => 1,
                'user_type' => 'user can view',
            ),
            1 => 
            array (
                'permission_id' => 3,
                'user_id' => 1,
                'user_type' => 'user can update',
            ),
            2 => 
            array (
                'permission_id' => 4,
                'user_id' => 1,
                'user_type' => 'user can delete',
            ),
        ));
        
        
    }
}
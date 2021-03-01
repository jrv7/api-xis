<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminPermissionRoleTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'role_has_permissions';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'permission_id' => self::getPermissionId('view'), // 3,
                'role_id' => self::getRoleId('admin'), // 1,
            ),
            array (
                'permission_id' => self::getPermissionId('create'), // 1,
                'role_id' => self::getRoleId('admin'), // 1,
            ),
            array (
                'permission_id' => self::getPermissionId('update'), // 2,
                'role_id' => self::getRoleId('admin'), // 1,
            ),
            array (
                'permission_id' => self::getPermissionId('delete'), // 4,
                'role_id' => self::getRoleId('admin'), // 1,
            ),
        ));
        
        
    }
}
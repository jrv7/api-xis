<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;
use DB;

class AdminRolesHasPermissionsInTablesSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'role_has_permissions_in_tables';
        \DB::table($tableName)->delete();

        $Permissions = DB::table('permissions')
            ->get();

        if ($Permissions->isNotEmpty()) {
            foreach ($Permissions as $Permission) {

                $Tables = db::table('db_tables')
                    ->get();
    
                if ($Tables->isNotEmpty()) {
                    foreach ($Tables as $Table) {

                        \DB::table($tableName)->insert([
                            'role_id' => self::getRoleId('admin'), // 1,
                            'permission_id' => $Permission->id,
                            'table_id' => $Table->id,
                        ]);

                        if ($Permission->name == 'view') {
                            \DB::table($tableName)->insert([
                                'role_id' => self::getRoleId('read-only'), // 2,
                                'permission_id' => $Permission->id,
                                'table_id' => $Table->id,
                            ]);
                        }
                    }
                }
            }
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class AdminRolesHasPermissionsInTablesSeeder extends Seeder
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
                            'role_id' => 1,
                            'permission_id' => $Permission->id,
                            'table_id' => $Table->id,
                        ]);
                    }
                }
            }
        }
    }
}
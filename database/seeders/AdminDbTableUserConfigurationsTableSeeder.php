<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTableUserConfigurationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_user_configurations';
        
        \DB::table($tableName)->delete();
        
        
        
    }
}
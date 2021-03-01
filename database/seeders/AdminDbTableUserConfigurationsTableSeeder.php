<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDbTableUserConfigurationsTableSeeder extends XisSeeder
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
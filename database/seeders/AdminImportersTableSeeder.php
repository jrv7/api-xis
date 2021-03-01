<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminImportersTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'importers';
        
        \DB::table($tableName)->delete();
        
        
        
    }
}
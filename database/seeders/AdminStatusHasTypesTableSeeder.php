<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminStatusHasTypesTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'status_has_types';
        
        \DB::table($tableName)->delete();
        
        
        
    }
}
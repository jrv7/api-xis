<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminStatusHasTypesTableSeeder extends Seeder
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
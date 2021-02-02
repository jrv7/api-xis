<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminImportersTableSeeder extends Seeder
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
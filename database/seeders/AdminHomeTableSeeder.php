<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminHomeTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'home';
        
        \DB::table($tableName)->delete();
        
        
        
    }
}
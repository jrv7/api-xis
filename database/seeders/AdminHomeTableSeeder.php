<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminHomeTableSeeder extends Seeder
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
<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminPasswordResetsTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'password_resets';
        
        \DB::table($tableName)->delete();
        
        
        
    }
}
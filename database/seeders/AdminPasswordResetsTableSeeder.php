<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminPasswordResetsTableSeeder extends Seeder
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
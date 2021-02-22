<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuHasActionMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'menu_has_action_menus';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'menu_id'           => 6,
                'target_menu_id'    => 7,
            ),
        ));
    }
}

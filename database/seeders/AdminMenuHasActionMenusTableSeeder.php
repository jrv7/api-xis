<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminMenuHasActionMenusTableSeeder extends XisSeeder
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
                'menu_id'           => self::getMenuId('bf4fc0f7f9966228b29a2b6e1813f0b7'), // 6,
                'target_menu_id'    => self::getMenuId('c038d4c071567f8673f2e51a4069f25c'), // 7,
            ),
        ));
    }
}

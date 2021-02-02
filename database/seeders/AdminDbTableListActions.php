<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTableListActions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_list_actions';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'table_id' => 6,
                'target_menu_id' => 40,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => 32,
                'target_menu_id' => 45,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => 11,
                'target_menu_id' => 48,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => 3,
                'target_menu_id' => 50,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => 13,
                'target_menu_id' => 52,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => 2,
                'target_menu_id' => 41,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => 9,
                'target_menu_id' => 60,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => 24,
                'target_menu_id' => 65,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
        ));
    }
}

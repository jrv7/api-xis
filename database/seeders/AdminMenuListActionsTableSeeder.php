<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenuListActionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'menu_list_actions';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'menu_id' => 33,
                'target_menu_id' => 40,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            1 => 
            array (
                'menu_id' => 46,
                'target_menu_id' => 45,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            2 => 
            array (
                'menu_id' => 37,
                'target_menu_id' => 48,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            3 => 
            array (
                'menu_id' => 26,
                'target_menu_id' => 50,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            4 => 
            array (
                'menu_id' => 51,
                'target_menu_id' => 52,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            5 => 
            array (
                'menu_id' => 6,
                'target_menu_id' => 41,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            6 => 
            array (
                'menu_id' => 59,
                'target_menu_id' => 60,
                'fa_icon' => NULL,
                'action_order' => '0',
                'menu_crud_action' => 'view',
            ),
            7 => 
            array (
                'menu_id' => 42,
                'target_menu_id' => 65,
                'fa_icon' => 'edit',
                'action_order' => NULL,
                'menu_crud_action' => 'view',
            ),
        ));
        
        
    }
}
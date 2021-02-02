<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenusRelatedTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'menus_related';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'menu_id' => 40,
                'related_menu_id' => 37,
                'menu_crud_action' => NULL,
                'joint_field_id' => 33,
                'is_tab' => true
            ),
            1 => 
            array (
                'menu_id' => 37,
                'related_menu_id' => 38,
                'menu_crud_action' => NULL,
                'joint_field_id' => null,
                'is_tab' => false
            ),
            2 => 
            array (
                'menu_id' => 45,
                'related_menu_id' => 47,
                'menu_crud_action' => NULL,
                'joint_field_id' => null,
                'is_tab' => false
            ),
            3 => 
            array (
                'menu_id' => 48,
                'related_menu_id' => 51,
                'menu_crud_action' => NULL,
                'joint_field_id' => null,
                'is_tab' => false
            ),
            4 => 
            array (
                'menu_id' => 51,
                'related_menu_id' => 49,
                'menu_crud_action' => NULL,
                'joint_field_id' => null,
                'is_tab' => false
            ),
            5 => 
            array (
                'menu_id' => 42,
                'related_menu_id' => 62,
                'menu_crud_action' => NULL,
                'joint_field_id' => null,
                'is_tab' => false
            ),
            6 => 
            array (
                'menu_id' => 59,
                'related_menu_id' => 61,
                'menu_crud_action' => NULL,
                'joint_field_id' => null,
                'is_tab' => false
            ),
            7 => 
            array (
                'menu_id' => 50,
                'related_menu_id' => 62,
                'menu_crud_action' => NULL,
                'joint_field_id' => null,
                'is_tab' => false
            ),
            8 => 
            array (
                'menu_id' => 40,
                'related_menu_id' => 66,
                'menu_crud_action' => NULL,
                'joint_field_id' => null,
                'is_tab' => false
            ),
            9 => 
            array (
                'menu_id' => 50,
                'related_menu_id' => 42,
                'menu_crud_action' => NULL,
                'joint_field_id' => 64,
                'is_tab' => true
            ),
            10 => 
            array (
                'menu_id' => 15,
                'related_menu_id' => 14,
                'menu_crud_action' => NULL,
                'joint_field_id' => 64,
                'is_tab' => true
            ),
        ));
        
        
    }
}
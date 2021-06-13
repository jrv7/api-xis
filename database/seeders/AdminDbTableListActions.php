<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDbTableListActions extends XisSeeder
{
    /**
     * Run the database seeds.
     *
     * self::getTableId('SEARCH_TABLE_NAME', 1), // 
     * 
     * self::getMenuId('TARGET_MENU_ID'), // 
     * 
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_list_actions';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'table_id' => self::getTableId('db_tables', 1), // 6,
                'target_menu_id' => self::getMenuId('997423f712aa8fd8e10f38a9afbb3c48'), // 40,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('dictionary', 1), // 32,
                'target_menu_id' => self::getMenuId('ea134e4b4256fc2f0f88109021c9b07f'), // 45,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('db_table_fields', 1), // 11,
                'target_menu_id' => self::getMenuId('0d305d3368202beb084b757d11394e31'), // 48,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('menus', 1), // 3,
                'target_menu_id' => self::getMenuId('c6177de3c5d54b9edc1e2e04fcfe43d5'), // 50,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            // array (
            //     'table_id' => self::getTableId('db_table_field_joins', 1), // 13,
            //     'target_menu_id' => self::getMenuId('8f05329a3c2a90e9f2b6fa3f5e822273'), // 52,
            //     'fa_icon' => 'edit',
            //     'action_order' => '1',
            //     'menu_crud_action' => 'view',
            // ),
            array (
                'table_id' => self::getTableId('users', 1), // 2,
                'target_menu_id' => self::getMenuId('7475ae2fd02e1086cea4973630445a45'), // 41,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('databases', 1), // 9,
                'target_menu_id' => self::getMenuId('e3d32941c8f66324f6f067f3718cfda8'), // 60,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            // array (
            //     'table_id' => self::getTableId('menus_related', 1), // 24,
            //     'target_menu_id' => self::getMenuId('74a3c738207d3e025d296250ca5722e9'), // 65,
            //     'fa_icon' => 'edit',
            //     'action_order' => '1',
            //     'menu_crud_action' => 'view',
            // ),
            array (
                'table_id' => self::getTableId('roles', 1), // 9,
                'target_menu_id' => self::getMenuId('dc211d992b7e397b158d3103f2b9cf5a'), // 60,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('systems', 1), // 9,
                'target_menu_id' => self::getMenuId('e542fbfb68f5da1243c71110921bf20b'), // 60,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
        ));
    }
}

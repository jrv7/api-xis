<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTableListActions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * self::getTableId('SEARCH_TABLE_NAME', 1), // 
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
                'target_menu_id' => 40,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('dictionary', 1), // 32,
                'target_menu_id' => 45,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('db_table_fields', 1), // 11,
                'target_menu_id' => 48,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('menus', 1), // 3,
                'target_menu_id' => 50,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('db_table_field_joins', 1), // 13,
                'target_menu_id' => 52,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('users', 1), // 2,
                'target_menu_id' => 41,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('databases', 1), // 9,
                'target_menu_id' => 60,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
            array (
                'table_id' => self::getTableId('menus_related', 1), // 24,
                'target_menu_id' => 65,
                'fa_icon' => 'edit',
                'action_order' => '1',
                'menu_crud_action' => 'view',
            ),
        ));
    }

    private static function getTableId($table_name, $database_id = 1)
    {
        $_table = \DB::table('db_tables')
            ->where('database_id', $database_id)
            ->where('name', $table_name)
            ->get();

        if ($_table->isNotEmpty()) {
            return $_table->first()->id;
        } else {
            return null;
        }
    }
}

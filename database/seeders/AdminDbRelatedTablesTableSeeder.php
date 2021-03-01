<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDbRelatedTablesTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * self::getTableId('SEARCH_TABLE_NAME', 1), // 
     * 
     * @return void
     */
    public function run()
    {
        $tableName = 'db_related_tables';
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'table_id' => self::getTableId('dictionary', 1), // 32,
                'related_table_id' => self::getTableId('dictionary_translations', 1), // 33,
                'relation_order' => 0,
                'joint_field_id' => self::getTableFieldId('dictionary', 'id'), // 166
                'joint_menu_id' => null,
            ),
            array (
                'table_id' => self::getTableId('databases', 1), // 9,
                'related_table_id' => self::getTableId('db_tables', 1), // 6,
                'relation_order' => 0,
                'joint_field_id' => self::getTableFieldId('databases', 'id'), // 80,
                'joint_menu_id' => null,
            ),
            array (
                'table_id' => self::getTableId('db_tables', 1), // 6,
                'related_table_id' => self::getTableId('db_table_fields', 1), // 11,
                'relation_order' => 0,
                'joint_field_id' => self::getTableFieldId('db_tables', 'id'), // 53,
                'joint_menu_id' => null,
            ),
        ));
    }
}
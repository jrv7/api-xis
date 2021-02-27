<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbRelatedTablesTableSeeder extends Seeder
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

    private static function getTableFieldId($table_name, $field_name)
    {
        $_table_field = \DB::table('db_table_fields')
            ->join('db_tables AS t', 't.id', '=', 'db_table_fields.table_id')
            ->where('t.name', $table_name)
            ->where('db_table_fields.name', $field_name)
            ->get();

        if ($_table_field->isNotEmpty()) {
            return $_table_field->first()->id;
        } else {
            return null;
        }
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbRelatedTablesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_related_tables';
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'table_id' => 6,
                'related_table_id' => 6,
                'relation_order' => 0,
                'joint_field_id' => NULL,
                'joint_menu_id' => NULL,
            ),
            1 => 
            array (
                'table_id' => 3,
                'related_table_id' => 3,
                'relation_order' => 0,
                'joint_field_id' => NULL,
                'joint_menu_id' => NULL,
            ),
            2 => 
            array (
                'table_id' => 5,
                'related_table_id' => 5,
                'relation_order' => 0,
                'joint_field_id' => NULL,
                'joint_menu_id' => NULL,
            ),
            3 => 
            array (
                'table_id' => 9,
                'related_table_id' => 9,
                'relation_order' => 0,
                'joint_field_id' => NULL,
                'joint_menu_id' => NULL,
            ),
            4 => 
            array (
                'table_id' => 10,
                'related_table_id' => 10,
                'relation_order' => 0,
                'joint_field_id' => NULL,
                'joint_menu_id' => NULL,
            ),
            5 => 
            array (
                'table_id' => 12,
                'related_table_id' => 12,
                'relation_order' => 0,
                'joint_field_id' => NULL,
                'joint_menu_id' => NULL,
            ),
            6 => 
            array (
                'table_id' => 6,
                'related_table_id' => 11,
                'relation_order' => 0,
                'joint_field_id' => 33,
                'joint_menu_id' => 37,
            ),
            7 => 
            array (
                'table_id' => 11,
                'related_table_id' => 11,
                'relation_order' => 0,
                'joint_field_id' => 33,
                'joint_menu_id' => 37,
            ),
            8 => 
            array (
                'table_id' => 2,
                'related_table_id' => 2,
                'relation_order' => 0,
                'joint_field_id' => NULL,
                'joint_menu_id' => NULL,
            ),
        ));
    }
}
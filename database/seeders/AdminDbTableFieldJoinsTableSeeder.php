<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTableFieldJoinsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_field_joins';
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'relation_type_id' => 2,
                'local_field_id' => 24,
                'remote_field_id' => 28,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 29,
                'model_foreign_function' => '_database',
            ),
            1 => 
            array (
                'relation_type_id' => 2,
                'local_field_id' => 26,
                'remote_field_id' => 30,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 31,
                'model_foreign_function' => '_table_yype',
            ),
            2 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 14,
                'remote_field_id' => 21,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 22,
                'model_foreign_function' => '_father_menu',
            ),
            3 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 20,
                'remote_field_id' => 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 25,
                'model_foreign_function' => '_area_table',
            ),
            4 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 33,
                'remote_field_id' => 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 25,
                'model_foreign_function' => NULL,
            ),
            5 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 34,
                'remote_field_id' => 36,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 37,
                'model_foreign_function' => NULL,
            ),
            6 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 64,
                'remote_field_id' => 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 15,
                'model_foreign_function' => NULL,
            ),
            7 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 112,
                'remote_field_id' => 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 15,
                'model_foreign_function' => NULL,
            ),
            8 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 39,
                'remote_field_id' => 50,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 48,
                'model_foreign_function' => NULL,
            ),
            9 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 108,
                'remote_field_id' => 32,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 35,
                'model_foreign_function' => NULL,
            ),
            10 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 70,
                'remote_field_id' => 139,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 140,
                'model_foreign_function' => NULL,
            ),
            11 => 
            array (
                'relation_type_id' => 2,
                'local_field_id' => 97,
                'remote_field_id' => 139,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 140,
                'model_foreign_function' => NULL,
            ),
            12 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 137,
                'remote_field_id' => 141,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 142,
                'model_foreign_function' => NULL,
            ),
            13 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 136,
                'remote_field_id' => 134,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 135,
                'model_foreign_function' => NULL,
            ),
            14 => 
            array (
                'relation_type_id' => 2,
                'local_field_id' => 144,
                'remote_field_id' => 149,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 150,
                'model_foreign_function' => NULL,
            ),
            15 => 
            array (
                'relation_type_id' => 2,
                'local_field_id' => 145,
                'remote_field_id' => 152,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 153,
                'model_foreign_function' => NULL,
            ),
            16 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 148,
                'remote_field_id' => 155,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 156,
                'model_foreign_function' => NULL,
            ),
            17 => 
            array (
                'relation_type_id' => 2,
                'local_field_id' => 157,
                'remote_field_id' => 21,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 22,
                'model_foreign_function' => NULL,
            ),
            18 => 
            array (
                'relation_type_id' => 2,
                'local_field_id' => 211,
                'remote_field_id' => 143,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 146,
                'model_foreign_function' => NULL,
            ),
            19 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 225,
                'remote_field_id' => 1,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 2,
                'model_foreign_function' => NULL,
            ),
            20 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 227,
                'remote_field_id' => 224,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 226,
                'model_foreign_function' => NULL,
            ),
            21 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 228,
                'remote_field_id' => 32,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 35,
                'model_foreign_function' => NULL,
            ),
            22 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 230,
                'remote_field_id' => 224,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 226,
                'model_foreign_function' => NULL,
            ),
            23 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 231,
                'remote_field_id' => 32,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 35,
                'model_foreign_function' => NULL,
            ),
            24 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 124,
                'remote_field_id' => 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 15,
                'model_foreign_function' => NULL,
            ),
            25 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 123,
                'remote_field_id' => 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 15,
                'model_foreign_function' => NULL,
            ),
            26 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 249,
                'remote_field_id' => 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 25,
                'model_foreign_function' => NULL,
            ),
            27 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 250,
                'remote_field_id' => 246,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 247,
                'model_foreign_function' => NULL,
            ),
            28 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 253,
                'remote_field_id' => 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 25,
                'model_foreign_function' => NULL,
            ),
            29 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 254,
                'remote_field_id' => 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 15,
                'model_foreign_function' => NULL,
            ),
            30 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 255,
                'remote_field_id' => 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 25,
                'model_foreign_function' => NULL,
            ),
            31 => 
            array (
                'relation_type_id' => 1,
                'local_field_id' => 256,
                'remote_field_id' => 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => 25,
                'model_foreign_function' => NULL,
            ),
            
        ));
        
        
    }
}
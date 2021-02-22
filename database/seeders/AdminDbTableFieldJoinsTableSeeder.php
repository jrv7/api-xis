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
    private static function getFieldId($table_name, $field_name)
    {
        $field = \DB::table('db_table_fields')
            ->selectRaw('db_table_fields.id')
            ->join('db_tables AS t', 't.id', '=', 'db_table_fields.table_id')
            ->whereRaw("t.name LIKE '{$table_name}'")
            ->whereRaw("db_table_fields.name LIKE '{$field_name}'")
            ->get();

        if ($field->isNotEmpty()) {
            $field = $field->first();

            return $field->id;
        }

        dd($table_name, $field_name);

        return null;
    }

    public function run()
    {
        $tableName = 'db_table_field_joins';
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'relation_type_id' => 2,
                'local_field_id' => self::getFieldId('db_tables', 'database_id'),//24,
                'remote_field_id' => self::getFieldId('databases', 'id'), //28,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('databases', 'name'), //29,
                'model_foreign_function' => '_database',
            ),
            array (
                'relation_type_id' => 2,
                'local_field_id' => self::getFieldId('db_tables', 'table_type_id'), // 26,
                'remote_field_id' => self::getFieldId('db_table_types', 'id'), // 30,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_table_types', 'name'), // 31,
                'model_foreign_function' => '_table_yype',
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('menus', 'father_menu_id'), // 14,
                'remote_field_id' => self::getFieldId('vw_father_menus', 'id_father_menu'), // 21,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('vw_father_menus', 'father_menu'), // 22,
                'model_foreign_function' => '_father_menu',
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('menus', 'db_table_id'), // 20,
                'remote_field_id' => self::getFieldId('db_tables', 'id'), // 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_tables', 'name'), // 25,
                'model_foreign_function' => '_area_table',
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_fields', 'table_id'), // 33,
                'remote_field_id' => self::getFieldId('db_tables', 'id'), // 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_tables', 'name'), // 25,
                'model_foreign_function' => 'table',
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_fields', 'type_id'), // 34,
                'remote_field_id' => self::getFieldId('db_table_field_types', 'id'), // 36,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_table_field_types', 'name'), // 37,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('menus_related', 'menu_id'), // 64,
                'remote_field_id' => self::getFieldId('menus', 'id'), // 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('menus', 'menu_title'), // 15,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('menus_related', 'related_menu_id'), // 112,
                'remote_field_id' => self::getFieldId('menus', 'id'), // 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('menus', 'menu_title'), // 15,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_field_joins', 'relation_type_id'), // 39,
                'remote_field_id' => self::getFieldId('db_table_relation_types', 'id'), // 50,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_table_relation_types', 'name'), // 48,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_field_joins', 'local_field_id'), // 108,
                'remote_field_id' => self::getFieldId('db_table_fields', 'id'), // 32,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_table_fields', 'name'), // 35,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_field_joins', 'remote_field_id'), // 70,
                'remote_field_id' => self::getFieldId('vw_remote_table_fields', 'joint_remote_field_id'), // 139,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('vw_remote_table_fields', 'joint_remote_field_name'), // 140,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 2,
                'local_field_id' => self::getFieldId('db_table_field_joins', 'remote_visible_field_id'), // 97,
                'remote_field_id' => self::getFieldId('vw_remote_table_fields', 'joint_remote_field_id'), // 139,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('vw_remote_table_fields', 'joint_remote_field_name'), // 140,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('dictionary_translations', 'language_id'), // 137,
                'remote_field_id' => self::getFieldId('languages', 'id'), // 141,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('languages', 'name'), // 142,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('dictionary_translations', 'dictionary_id'), // 136,
                'remote_field_id' => self::getFieldId('dictionary', 'id'), // 134,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('dictionary', 'word'), // 135,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 2,
                'local_field_id' => self::getFieldId('menus', 'return_to_menu_id'), // 157,
                'remote_field_id' => self::getFieldId('vw_father_menus', 'id_father_menu'), // 21,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('vw_father_menus', 'father_menu'), // 22,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_update_history', 'user_id'), // 225,
                'remote_field_id' => self::getFieldId('users', 'id'), // 1,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('users', 'name'), // 2,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('menu_list_actions', 'target_menu_id'), // 124,
                'remote_field_id' => self::getFieldId('menus', 'id'), // 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('menus', 'menu_title'), // 15,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('menu_list_actions', 'menu_id'), // 123,
                'remote_field_id' => self::getFieldId('menus', 'id'), // 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('menus', 'menu_title'), // 15,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_triggers', 'table_id'), // 249,
                'remote_field_id' => self::getFieldId('db_tables', 'id'), // 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_tables', 'name'), // 25,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_triggers', 'table_trigger_type_id'), // 250,
                'remote_field_id' => self::getFieldId('db_table_trigger_types', 'id'), // 246,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_table_trigger_types', 'name'), // 247,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_list_actions', 'table_id'), // 253,
                'remote_field_id' => self::getFieldId('db_tables', 'id'), // 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_tables', 'name'), // 25,
                'model_foreign_function' => 'table',
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_list_actions', 'target_menu_id'), // 254,
                'remote_field_id' => self::getFieldId('menus', 'id'), // 13,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('menus', 'menu_title'), // 15,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_view_right_block', 'table_id'), // 255,
                'remote_field_id' => self::getFieldId('db_tables', 'id'), // 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_tables', 'name'), // 25,
                'model_foreign_function' => table,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('db_table_view_right_block', 'right_table_id'), // 256,
                'remote_field_id' => self::getFieldId('db_tables', 'id'), // 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_tables', 'name'), // 25,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('user_has_roles', 'user_id'), // 68,
                'remote_field_id' => self::getFieldId('users', 'id'), // 1,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('users', 'name'), // 2,
                'model_foreign_function' => 'user',
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('user_has_roles', 'role_id'), // 111,
                'remote_field_id' => self::getFieldId('roles', 'id'), // 59,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('roles', 'display_name'), // 72,
                'model_foreign_function' => 'role',
            ),
            array (
                'relation_type_id' => 1,
                'local_field_id' => self::getFieldId('vw_many_to_many_tables', 'n_visible_field_id'), // 268,
                'remote_field_id' => self::getFieldId('db_tables', 'id'), // 23,
                'nofield_join_value' => NULL,
                'remote_visible_field_id' => self::getFieldId('db_tables', 'name'), // 25,
                'model_foreign_function' => NULL,
            ),
            
        ));
        
        
    }
}
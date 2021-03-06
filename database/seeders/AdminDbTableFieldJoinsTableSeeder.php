<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDbTableFieldJoinsTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * self::getTableRelationTypeId('INNER'), // 
     * 
     * @return void
     */

    public function run()
    {
        $tableName = 'db_table_field_joins';
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'relation_type_id' => self::getTableRelationTypeId('LEFT'), // 2,
                'local_table_id' => self::getTableId('db_tables'),
                'local_field_id' => self::getTableFieldId('db_tables', 'database_id'),//24,
                'remote_table_id' => self::getTableId('databases'),
                'remote_field_id' => self::getTableFieldId('databases', 'id'), //28,
                'remote_visible_field_id' => self::getTableFieldId('databases', 'name'), //29,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => '_database',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('LEFT'), // 2,
                'local_table_id' => self::getTableId('db_tables'),
                'local_field_id' => self::getTableFieldId('db_tables', 'table_type_id'), // 26,
                'remote_table_id' => self::getTableId('db_table_types'),
                'remote_field_id' => self::getTableFieldId('db_table_types', 'id'), // 30,
                'remote_visible_field_id' => self::getTableFieldId('db_table_types', 'name'), // 31,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => '_table_yype',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 2,
                'local_table_id' => self::getTableId('vw_db_tables'),
                'local_field_id' => self::getTableFieldId('vw_db_tables', 'database_id'),//24,
                'remote_table_id' => self::getTableId('databases'),
                'remote_field_id' => self::getTableFieldId('databases', 'id'), //28,
                'remote_visible_field_id' => self::getTableFieldId('databases', 'name'), //29,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'database',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('menus'),
                'local_field_id' => self::getTableFieldId('menus', 'father_menu_id'), // 14,
                'remote_table_id' => self::getTableId('vw_father_menus'),
                'remote_field_id' => self::getTableFieldId('vw_father_menus', 'id_father_menu'), // 21,
                'remote_visible_field_id' => self::getTableFieldId('vw_father_menus', 'father_menu'), // 22,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => '_father_menu',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('menus'),
                'local_field_id' => self::getTableFieldId('menus', 'table_id'), // 20,
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'), // 23,
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'), // 25,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => '_area_table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_fields'),
                'local_field_id' => self::getTableFieldId('db_table_fields', 'table_id'), // 33,
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'), // 23,
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'), // 25,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_fields'),
                'local_field_id' => self::getTableFieldId('db_table_fields', 'type_id'), // 34,
                'remote_table_id' => self::getTableId('db_table_field_types'),
                'remote_field_id' => self::getTableFieldId('db_table_field_types', 'id'), // 36,
                'remote_visible_field_id' => self::getTableFieldId('db_table_field_types', 'name'), // 37,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('vw_db_table_fields'),
                'local_field_id' => self::getTableFieldId('vw_db_table_fields', 'table_id'), // 33,
                'remote_table_id' => self::getTableId('vw_db_tables'),
                'remote_field_id' => self::getTableFieldId('vw_db_tables', 'id'), // 23,
                'remote_visible_field_id' => self::getTableFieldId('vw_db_tables', 'name'), // 25,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('vw_db_table_fields'),
                'local_field_id' => self::getTableFieldId('vw_db_table_fields', 'type_id'), // 34,
                'remote_table_id' => self::getTableId('vw_db_table_field_types'),
                'remote_field_id' => self::getTableFieldId('vw_db_table_field_types', 'id'), // 36,
                'remote_visible_field_id' => self::getTableFieldId('vw_db_table_field_types', 'name'), // 37,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('vw_db_table_filter_fields'),
                'local_field_id' => self::getTableFieldId('vw_db_table_filter_fields', 'table_id'), // 33,
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'), // 23,
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'), // 25,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('menus_related'),
                'local_field_id' => self::getTableFieldId('menus_related', 'menu_id'), // 64,
                'remote_table_id' => self::getTableId('menus'),
                'remote_field_id' => self::getTableFieldId('menus', 'id'), // 13,
                'remote_visible_field_id' => self::getTableFieldId('menus', 'menu_title'), // 15,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('menus_related'),
                'local_field_id' => self::getTableFieldId('menus_related', 'related_menu_id'), // 112,
                'remote_table_id' => self::getTableId('menus'),
                'remote_field_id' => self::getTableFieldId('menus', 'id'), // 13,
                'remote_visible_field_id' => self::getTableFieldId('menus', 'menu_title'), // 15,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_field_joins'),
                'local_field_id' => self::getTableFieldId('db_table_field_joins', 'relation_type_id'), // 39,
                'remote_table_id' => self::getTableId('db_table_relation_types'),
                'remote_field_id' => self::getTableFieldId('db_table_relation_types', 'id'), // 50,
                'remote_visible_field_id' => self::getTableFieldId('db_table_relation_types', 'name'), // 48,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_field_joins'),
                'local_field_id' => self::getTableFieldId('db_table_field_joins', 'local_table_id'), // 108,
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'), // 32,
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'), // 35,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'local_table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_field_joins'),
                'local_field_id' => self::getTableFieldId('db_table_field_joins', 'local_field_id'), // 108,
                'remote_table_id' => self::getTableId('db_table_fields'),
                'remote_field_id' => self::getTableFieldId('db_table_fields', 'id'), // 32,
                'remote_visible_field_id' => self::getTableFieldId('db_table_fields', 'name'), // 35,
                'filter_field_id' => self::getTableFieldId('db_table_field_joins', 'local_table_id'),
                'can_be_mapped' => false,
                'model_foreign_function' => 'local_field',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_field_joins'),
                'local_field_id' => self::getTableFieldId('db_table_field_joins', 'remote_table_id'), // 108,
                'remote_table_id' => self::getTableId('vw_db_tables'),
                'remote_field_id' => self::getTableFieldId('vw_db_tables', 'id'), // 32,
                'remote_visible_field_id' => self::getTableFieldId('vw_db_tables', 'name'), // 35,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'remote_table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_field_joins'),
                'local_field_id' => self::getTableFieldId('db_table_field_joins', 'remote_field_id'), // 70,
                'remote_table_id' => self::getTableId('vw_db_table_fields'),
                'remote_field_id' => self::getTableFieldId('vw_db_table_fields', 'id'), // 139,
                'remote_visible_field_id' => self::getTableFieldId('vw_db_table_fields', 'name'), // 140,
                'filter_field_id' => self::getTableFieldId('db_table_field_joins', 'remote_table_id'),
                'can_be_mapped' => false,
                'model_foreign_function' => 'remote_field',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('LEFT'), // 2,
                'local_table_id' => self::getTableId('db_table_field_joins'),
                'local_field_id' => self::getTableFieldId('db_table_field_joins', 'remote_visible_field_id'), // 97,
                'remote_table_id' => self::getTableId('vw_db_table_fields'),
                'remote_field_id' => self::getTableFieldId('vw_db_table_fields', 'id'), // 139,
                'remote_visible_field_id' => self::getTableFieldId('vw_db_table_fields', 'name'), // 140,
                'filter_field_id' => self::getTableFieldId('db_table_field_joins', 'remote_table_id'),
                'can_be_mapped' => false,
                'model_foreign_function' => 'remote_visible_field',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('LEFT'), // 2,
                'local_table_id' => self::getTableId('db_table_field_joins'),
                'local_field_id' => self::getTableFieldId('db_table_field_joins', 'filter_field_id'), // 97,
                'remote_table_id' => self::getTableId('vw_db_table_filter_fields'),
                'remote_field_id' => self::getTableFieldId('vw_db_table_filter_fields', 'id'), // 139,
                'remote_visible_field_id' => self::getTableFieldId('vw_db_table_filter_fields', 'name'), // 140,
                'filter_field_id' => self::getTableFieldId('db_table_field_joins', 'local_table_id'),
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('dictionary_translations'),
                'local_field_id' => self::getTableFieldId('dictionary_translations', 'language_id'), // 137,
                'remote_table_id' => self::getTableId('languages'),
                'remote_field_id' => self::getTableFieldId('languages', 'id'), // 141,
                'remote_visible_field_id' => self::getTableFieldId('languages', 'name'), // 142,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('dictionary_translations'),
                'local_field_id' => self::getTableFieldId('dictionary_translations', 'dictionary_id'), // 136,
                'remote_table_id' => self::getTableId('dictionary'),
                'remote_field_id' => self::getTableFieldId('dictionary', 'id'), // 134,
                'remote_visible_field_id' => self::getTableFieldId('dictionary', 'word'), // 135,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('LEFT'), // 2,
                'local_table_id' => self::getTableId('menus'),
                'local_field_id' => self::getTableFieldId('menus', 'return_to_menu_id'), // 157,
                'remote_table_id' => self::getTableId('vw_father_menus'),
                'remote_field_id' => self::getTableFieldId('vw_father_menus', 'id_father_menu'), // 21,
                'remote_visible_field_id' => self::getTableFieldId('vw_father_menus', 'father_menu'), // 22,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_update_history'),
                'local_field_id' => self::getTableFieldId('db_update_history', 'user_id'), // 225,
                'remote_table_id' => self::getTableId('users'),
                'remote_field_id' => self::getTableFieldId('users', 'id'), // 1,
                'remote_visible_field_id' => self::getTableFieldId('users', 'name'), // 2,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('menu_list_actions'),
                'local_field_id' => self::getTableFieldId('menu_list_actions', 'target_menu_id'), // 124,
                'remote_table_id' => self::getTableId('menus'),
                'remote_field_id' => self::getTableFieldId('menus', 'id'), // 13,
                'remote_visible_field_id' => self::getTableFieldId('menus', 'menu_title'), // 15,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('menu_list_actions'),
                'local_field_id' => self::getTableFieldId('menu_list_actions', 'menu_id'), // 123,
                'remote_table_id' => self::getTableId('menus'),
                'remote_field_id' => self::getTableFieldId('menus', 'id'), // 13,
                'remote_visible_field_id' => self::getTableFieldId('menus', 'menu_title'), // 15,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_triggers'),
                'local_field_id' => self::getTableFieldId('db_table_triggers', 'table_id'), // 249,
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'), // 23,
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'), // 25,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_triggers'),
                'local_field_id' => self::getTableFieldId('db_table_triggers', 'table_trigger_type_id'), // 250,
                'remote_table_id' => self::getTableId('db_table_trigger_types'),
                'remote_field_id' => self::getTableFieldId('db_table_trigger_types', 'id'), // 246,
                'remote_visible_field_id' => self::getTableFieldId('db_table_trigger_types', 'name'), // 247,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_list_actions'),
                'local_field_id' => self::getTableFieldId('db_table_list_actions', 'table_id'), // 253,
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'), // 23,
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'), // 25,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_list_actions'),
                'local_field_id' => self::getTableFieldId('db_table_list_actions', 'target_menu_id'), // 254,
                'remote_table_id' => self::getTableId('menus'),
                'remote_field_id' => self::getTableFieldId('menus', 'id'), // 13,
                'remote_visible_field_id' => self::getTableFieldId('menus', 'menu_title'), // 15,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_view_right_block'),
                'local_field_id' => self::getTableFieldId('db_table_view_right_block', 'table_id'), // 255,
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'), // 23,
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'), // 25,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_table_view_right_block'),
                'local_field_id' => self::getTableFieldId('db_table_view_right_block', 'right_table_id'), // 256,
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'), // 23,
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'), // 25,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('user_has_roles'),
                'local_field_id' => self::getTableFieldId('user_has_roles', 'user_id'), // 68,
                'remote_table_id' => self::getTableId('users'),
                'remote_field_id' => self::getTableFieldId('users', 'id'), // 1,
                'remote_visible_field_id' => self::getTableFieldId('users', 'name'), // 2,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'user',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('user_has_roles'),
                'local_field_id' => self::getTableFieldId('user_has_roles', 'role_id'), // 111,
                'remote_table_id' => self::getTableId('roles'),
                'remote_field_id' => self::getTableFieldId('roles', 'id'), // 59,
                'remote_visible_field_id' => self::getTableFieldId('roles', 'display_name'), // 72,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'role',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('vw_many_to_many_tables'),
                'local_field_id' => self::getTableFieldId('vw_many_to_many_tables', 'n_visible_field_id'), // 268,
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'), // 23,
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'), // 25,
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => NULL,
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('role_has_permissions_in_tables'),
                'local_field_id' => self::getTableFieldId('role_has_permissions_in_tables', 'role_id'),
                'remote_table_id' => self::getTableId('roles'),
                'remote_field_id' => self::getTableFieldId('roles', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('roles', 'display_name'),
                'filter_field_id' => null,
                'can_be_mapped' => true,
                'model_foreign_function' => 'role',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('role_has_permissions_in_tables'),
                'local_field_id' => self::getTableFieldId('role_has_permissions_in_tables', 'permission_id'),
                'remote_table_id' => self::getTableId('permissions'),
                'remote_field_id' => self::getTableFieldId('permissions', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('permissions', 'display_name'),
                'filter_field_id' => null,
                'can_be_mapped' => true,
                'model_foreign_function' => 'permission',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('role_has_permissions_in_tables'),
                'local_field_id' => self::getTableFieldId('role_has_permissions_in_tables', 'table_id'),
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'),
                'filter_field_id' => null,
                'can_be_mapped' => true,
                'model_foreign_function' => 'table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('tests_table'),
                'local_field_id' => self::getTableFieldId('tests_table', 'field_foreign'),
                'remote_table_id' => self::getTableId('tests_table'),
                'remote_field_id' => self::getTableFieldId('tests_table', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('tests_table', 'field_string'),
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'test',
            ),

            // field_foreign
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_related_tables'),
                'local_field_id' => self::getTableFieldId('db_related_tables', 'table_id'),
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'),
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_related_tables'),
                'local_field_id' => self::getTableFieldId('db_related_tables', 'related_table_id'),
                'remote_table_id' => self::getTableId('db_tables'),
                'remote_field_id' => self::getTableFieldId('db_tables', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('db_tables', 'name'),
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'related_table',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 1,
                'local_table_id' => self::getTableId('db_related_tables'),
                'local_field_id' => self::getTableFieldId('db_related_tables', 'joint_field_id'),
                'remote_table_id' => self::getTableId('db_table_fields'),
                'remote_field_id' => self::getTableFieldId('db_table_fields', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('db_table_fields', 'name'),
                'filter_field_id' => self::getTableFieldId('db_related_tables', 'table_id'),
                'can_be_mapped' => false,
                'model_foreign_function' => 'joint_field',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('LEFT'), // 2
                'local_table_id' => self::getTableId('db_related_tables'),
                'local_field_id' => self::getTableFieldId('db_related_tables', 'conditional_field_id'),
                'remote_table_id' => self::getTableId('db_table_fields'),
                'remote_field_id' => self::getTableFieldId('db_table_fields', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('db_table_fields', 'name'),
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'conditionalField',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 2
                'local_table_id' => self::getTableId('user_has_systems'),
                'local_field_id' => self::getTableFieldId('user_has_systems', 'user_id'),
                'remote_table_id' => self::getTableId('users'),
                'remote_field_id' => self::getTableFieldId('users', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('users', 'name'),
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'user',
            ),
            array (
                'relation_type_id' => self::getTableRelationTypeId('INNER'), // 2
                'local_table_id' => self::getTableId('user_has_systems'),
                'local_field_id' => self::getTableFieldId('user_has_systems', 'system_id'),
                'remote_table_id' => self::getTableId('systems'),
                'remote_field_id' => self::getTableFieldId('systems', 'id'),
                'remote_visible_field_id' => self::getTableFieldId('systems', 'name'),
                'filter_field_id' => null,
                'can_be_mapped' => false,
                'model_foreign_function' => 'system',
            ),
        ));
        
        
    }
}
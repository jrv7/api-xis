<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDbTablesTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_tables';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_types',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'dictionary_translations',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_relation_types',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'languages',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            // array (
            //     'database_id' => 2,
            //     'name' => 'modelos',
            //     'table_type_id' => self::getTableTypeId('normal'), // 1,
            //     'model' => null,
            //     'default_list_action_field_id' => NULL,
            //     'total_rows' => 17677,
            //     'created_at' => NULL,
            //     'updated_at' => NULL,
            //     'has_timestamps' => false,
            //     'indexable' => true,
            // ),
            // array (
            //     'database_id' => 2,
            //     'name' => 'produtos',
            //     'table_type_id' => self::getTableTypeId('normal'), // 1,
            //     'model' => null,
            //     'default_list_action_field_id' => NULL,
            //     'total_rows' => 34470,
            //     'created_at' => NULL,
            //     'updated_at' => NULL,
            //     'has_timestamps' => false,
            //     'indexable' => true,
            // ),
            // array (
            //     'database_id' => 2,
            //     'name' => 'etapas_vida',
            //     'table_type_id' => self::getTableTypeId('normal'), // 1,
            //     'model' => null,
            //     'default_list_action_field_id' => NULL,
            //     'total_rows' => 5,
            //     'created_at' => NULL,
            //     'updated_at' => NULL,
            //     'has_timestamps' => false,
            //     'indexable' => true,
            // ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'status',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_related_tables',
                'table_type_id' => self::getTableTypeId('join_n_m'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'importers',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_update_history_ids',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'migrations',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_update_history_changes',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'permissions',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'dictionary',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 23,
                'created_at' => NULL,
                'updated_at' => '2018-09-02 02:09:07',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'databases',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_field_types',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'menus_related',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'users',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 2,
                'created_at' => NULL,
                'updated_at' => '2018-09-02 02:16:27',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'systems',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 2,
                'created_at' => NULL,
                'updated_at' => null,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'user_has_systems',
                'table_type_id' => self::getTableTypeId('join_n_m'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => null,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'menu_list_actions',
                'table_type_id' => self::getTableTypeId('join_n_m'), // 4,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_field_joins',
                'table_type_id' => self::getTableTypeId('join_1_n'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'user_has_roles',
                'table_type_id' => self::getTableTypeId('join_n_m'), // 4,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_user_configurations',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'role_menu',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'vw_father_menus',
                'table_type_id' => self::getTableTypeId('table_view'), // 5,
                'model' => null,
                'default_list_action_field_id' => 77,
                'total_rows' => 55,
                'created_at' => NULL,
                'updated_at' => '2018-08-30 05:08:37',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'role_menu_permission',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'password_resets',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'roles',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'permission_role',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'permission_user',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_update_history',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'home',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            // array (
            //     'database_id' => 2,
            //     'name' => 'artigos',
            //     'table_type_id' => self::getTableTypeId('normal'), // 1,
            //     'model' => null,
            //     'default_list_action_field_id' => NULL,
            //     'total_rows' => 37438,
            //     'created_at' => NULL,
            //     'updated_at' => '2018-09-12 00:00:00',
            //     'has_timestamps' => false,
            //     'indexable' => true,
            // ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'vw_remote_table_fields',
                'table_type_id' => self::getTableTypeId('table_view'), // 5,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 185,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_tables',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 40,
                'created_at' => NULL,
                'updated_at' => '2018-10-10 23:07:32.456571',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'vw_db_tables',
                'table_type_id' => self::getTableTypeId('table_view'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => null,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'vw_db_table_field_types',
                'table_type_id' => self::getTableTypeId('table_view'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => null,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'vw_db_table_fields',
                'table_type_id' => self::getTableTypeId('table_view'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => null,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'vw_db_table_filter_fields',
                'table_type_id' => self::getTableTypeId('table_view'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => null,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'sessions',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            // array (
            //     'database_id' => 3,
            //     'name' => 'cards',
            //     'table_type_id' => self::getTableTypeId('normal'), // 1,
            //     'model' => null,
            //     'default_list_action_field_id' => NULL,
            //     'total_rows' => NULL,
            //     'created_at' => NULL,
            //     'updated_at' => NULL,
            //     'has_timestamps' => false,
            //     'indexable' => true,
            // ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_fields',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 185,
                'created_at' => NULL,
                'updated_at' => '2019-01-17 18:50:10.12891',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'menus',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => 16,
                'total_rows' => 55,
                'created_at' => NULL,
                'updated_at' => '2019-01-18 14:00:58.599267',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_trigger_types',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => null,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_triggers',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => null,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_list_actions',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'db_table_view_right_block',
                'table_type_id' => self::getTableTypeId('normal'), // 1,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'vw_many_to_many_tables',
                'table_type_id' => self::getTableTypeId('table_view'), // 5,
                'model' => 'App\Models\User\VwManyToManyTable',
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'role_has_permissions_in_tables',
                'table_type_id' => self::getTableTypeId('join_n_m_map'), // 5,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            array (
                'database_id' => self::getDatabaseId('admin'), // 1,
                'dbhash' => self::getUniqueDbHash('db_tables', 'T', 16),
                'name' => 'tests_table',
                'table_type_id' => self::getTableTypeId('normal'), // 5,
                'model' => null,
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => true,
                'indexable' => false,
            ),
        ));
        
        echo "Setando o proximo valor para a sequencia incremental como: ";
        $tudo = \DB::table($tableName)
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get(['id']);

        if ($tudo->isNotEmpty()) {
            $total_tabela = $tudo->first()->id;
        } else {
            $total_tabela = 0;
        }

        $total_tabela++;

        echo $total_tabela;

        \DB::statement("alter sequence admin.db_tables_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }

    public static function getTableTypeId($type_name)
    {
        $_table_type = \DB::table('db_table_types')
            ->where('name', $type_name)
            ->get();

        if ($_table_type->isNotEmpty()) {
            return $_table_type->first()->id;
        } else {
            return null;
        }
    }
}
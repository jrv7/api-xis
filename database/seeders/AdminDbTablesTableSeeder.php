<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTablesTableSeeder extends Seeder
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
            0 => 
            array (
                'id' => 10,
                'database_id' => 1,
                'name' => 'db_table_types',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            1 => 
            array (
                'id' => 33,
                'database_id' => 1,
                'name' => 'dictionary_translations',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            2 => 
            array (
                'id' => 14,
                'database_id' => 1,
                'name' => 'db_table_relation_types',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            3 => 
            array (
                'id' => 36,
                'database_id' => 1,
                'name' => 'languages',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            4 => 
            array (
                'id' => 38,
                'database_id' => 2,
                'name' => 'modelos',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 17677,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            5 => 
            array (
                'id' => 39,
                'database_id' => 2,
                'name' => 'produtos',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 34470,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            6 => 
            array (
                'id' => 40,
                'database_id' => 2,
                'name' => 'etapas_vida',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            7 => 
            array (
                'id' => 22,
                'database_id' => 1,
                'name' => 'status',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            8 => 
            array (
                'id' => 23,
                'database_id' => 1,
                'name' => 'db_related_tables',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            9 => 
            array (
                'id' => 15,
                'database_id' => 1,
                'name' => 'importers',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            10 => 
            array (
                'id' => 44,
                'database_id' => 1,
                'name' => 'db_update_history_ids',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            11 => 
            array (
                'id' => 16,
                'database_id' => 1,
                'name' => 'db_table_types',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            12 => 
            array (
                'id' => 17,
                'database_id' => 1,
                'name' => 'migrations',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            13 => 
            array (
                'id' => 45,
                'database_id' => 1,
                'name' => 'db_update_history_changes',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            14 => 
            array (
                'id' => 18,
                'database_id' => 1,
                'name' => 'permissions',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            15 => 
            array (
                'id' => 32,
                'database_id' => 1,
                'name' => 'dictionary',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 23,
                'created_at' => NULL,
                'updated_at' => '2018-09-02 02:09:07',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            16 => 
            array (
                'id' => 9,
                'database_id' => 1,
                'name' => 'databases',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            17 => 
            array (
                'id' => 12,
                'database_id' => 1,
                'name' => 'db_table_field_types',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            18 => 
            array (
                'id' => 24,
                'database_id' => 1,
                'name' => 'menus_related',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            19 => 
            array (
                'id' => 2,
                'database_id' => 1,
                'name' => 'users',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 2,
                'created_at' => NULL,
                'updated_at' => '2018-09-02 02:16:27',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            20 => 
            array (
                'id' => 31,
                'database_id' => 1,
                'name' => 'menu_list_actions',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            21 => 
            array (
                'id' => 13,
                'database_id' => 1,
                'name' => 'db_table_field_joins',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            22 => 
            array (
                'id' => 26,
                'database_id' => 1,
                'name' => 'role_user',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            23 => 
            array (
                'id' => 27,
                'database_id' => 1,
                'name' => 'db_table_user_configurations',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            24 => 
            array (
                'id' => 19,
                'database_id' => 1,
                'name' => 'role_menu',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            25 => 
            array (
                'id' => 5,
                'database_id' => 1,
                'name' => 'vw_father_menus',
                'table_type_id' => 5,
                'model' => 'Nothing',
                'default_list_action_field_id' => 77,
                'total_rows' => 55,
                'created_at' => NULL,
                'updated_at' => '2018-08-30 05:08:37',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            26 => 
            array (
                'id' => 20,
                'database_id' => 1,
                'name' => 'role_menu_permission',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            27 => 
            array (
                'id' => 28,
                'database_id' => 1,
                'name' => 'password_resets',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            28 => 
            array (
                'id' => 21,
                'database_id' => 1,
                'name' => 'roles',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            29 => 
            array (
                'id' => 29,
                'database_id' => 1,
                'name' => 'permission_role',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            30 => 
            array (
                'id' => 30,
                'database_id' => 1,
                'name' => 'permission_user',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            31 => 
            array (
                'id' => 41,
                'database_id' => 1,
                'name' => 'testes',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 3,
                'created_at' => NULL,
                'updated_at' => '2018-08-26 04:48:35',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            32 => 
            array (
                'id' => 42,
                'database_id' => 1,
                'name' => 'db_update_history',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            33 => 
            array (
                'id' => 1,
                'database_id' => 1,
                'name' => 'home',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            34 => 
            array (
                'id' => 37,
                'database_id' => 2,
                'name' => 'artigos',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 37438,
                'created_at' => NULL,
                'updated_at' => '2018-09-12 00:00:00',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            35 => 
            array (
                'id' => 34,
                'database_id' => 1,
                'name' => 'vw_remote_table_fields',
                'table_type_id' => 5,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 185,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            36 => 
            array (
                'id' => 6,
                'database_id' => 1,
                'name' => 'db_tables',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 40,
                'created_at' => NULL,
                'updated_at' => '2018-10-10 23:07:32.456571',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            37 => 
            array (
                'id' => 25,
                'database_id' => 1,
                'name' => 'sessions',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            38 => 
            array (
                'id' => 46,
                'database_id' => 3,
                'name' => 'cards',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            39 => 
            array (
                'id' => 11,
                'database_id' => 1,
                'name' => 'db_table_fields',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 185,
                'created_at' => NULL,
                'updated_at' => '2019-01-17 18:50:10.12891',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            40 => 
            array (
                'id' => 3,
                'database_id' => 1,
                'name' => 'menus',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => 16,
                'total_rows' => 55,
                'created_at' => NULL,
                'updated_at' => '2019-01-18 14:00:58.599267',
                'has_timestamps' => false,
                'indexable' => true,
            ),
            41 => 
            array (
                'id' => 47,
                'database_id' => 1,
                'name' => 'db_table_trigger_types',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => null,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            42 => 
            array (
                'id' => 48,
                'database_id' => 1,
                'name' => 'db_table_triggers',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => null,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => false,
            ),
            43 => 
            array (
                'id' => 49,
                'database_id' => 1,
                'name' => 'db_table_list_actions',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
            ),
            44 => 
            array (
                'id' => 50,
                'database_id' => 1,
                'name' => 'db_table_view_right_block',
                'table_type_id' => 1,
                'model' => 'Nothing',
                'default_list_action_field_id' => NULL,
                'total_rows' => 0,
                'created_at' => NULL,
                'updated_at' => NULL,
                'has_timestamps' => false,
                'indexable' => true,
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
}
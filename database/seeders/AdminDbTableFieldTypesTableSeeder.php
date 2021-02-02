<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTableFieldTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_field_types';
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'bigint',
                'schema_table_type' => 'bigInteger',
                'schema_autoincrement' => 'bigIncrements',
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            1 => 
            array (
                'id' => 20,
                'name' => 'int',
                'schema_table_type' => 'integer',
                'schema_autoincrement' => 'increments',
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            2 => 
            array (
                'id' => 8,
                'name' => 'boolean',
                'schema_table_type' => 'boolean',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'name' => 'character',
                'schema_table_type' => 'char',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            4 => 
            array (
                'id' => 3,
                'name' => 'text',
                'schema_table_type' => 'text',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            5 => 
            array (
                'id' => 14,
                'name' => 'password',
                'schema_table_type' => 'string',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'name' => 'str_fa_icon',
                'schema_table_type' => 'string',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            7 => 
            array (
                'id' => 16,
                'name' => 'md5',
                'schema_table_type' => 'string',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            8 => 
            array (
                'id' => 12,
                'name' => 'date',
                'schema_table_type' => 'date',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            9 => 
            array (
                'id' => 19,
                'name' => 'datetime',
                'schema_table_type' => 'dateTime',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            10 => 
            array (
                'id' => 21,
                'name' => 'time',
                'schema_table_type' => 'time',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'timestamp',
                'schema_table_type' => 'timestamp',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            12 => 
            array (
                'id' => 11,
                'name' => 'function',
                'schema_table_type' => 'text',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            13 => 
            array (
                'id' => 10,
                'name' => 'foreign',
                'schema_table_type' => 'bigInteger',
                'schema_autoincrement' => NULL,
                'schema_attributes' => NULL,
                'elasticsearch_type' => NULL,
            ),
            14 => 
            array (
                'id' => 18,
                'name' => 'from_list',
                'schema_table_type' => 'enum',
                'schema_autoincrement' => NULL,
                'schema_attributes' => 'array:["default_value"]',
                'elasticsearch_type' => NULL,
            ),
            15 => 
            array (
                'id' => 9,
                'name' => 'preset',
                'schema_table_type' => 'enum',
                'schema_autoincrement' => NULL,
                'schema_attributes' => 'array:["default_value"]',
                'elasticsearch_type' => NULL,
            ),
            16 => 
            array (
                'id' => 2,
                'name' => 'string',
                'schema_table_type' => 'string',
                'schema_autoincrement' => NULL,
                'schema_attributes' => '1:["max_length"]',
                'elasticsearch_type' => NULL,
            ),
            17 => 
            array (
                'id' => 4,
                'name' => 'float',
                'schema_table_type' => 'double',
                'schema_autoincrement' => NULL,
                'schema_attributes' => '2:["min_length","max_length"]',
                'elasticsearch_type' => NULL,
            ),
            18 => 
            array (
                'id' => 5,
                'name' => 'currency',
                'schema_table_type' => 'decimal',
                'schema_autoincrement' => NULL,
                'schema_attributes' => '2:["min_length","max_length"]',
                'elasticsearch_type' => NULL,
            ),
            19 => 
            array (
                'id' => 7,
                'name' => 'percentage',
                'schema_table_type' => 'double',
                'schema_autoincrement' => NULL,
                'schema_attributes' => '2:["min_length","max_length"]',
                'elasticsearch_type' => NULL,
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

        \DB::statement("alter sequence admin.db_table_field_types_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
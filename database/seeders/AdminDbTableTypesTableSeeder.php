<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDbTableTypesTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_types';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                // 'id' => 1,
                'name' => 'normal',
            ),
            array (
                // 'id' => 2,
                'name' => 'join_1_1',
            ),
            array (
                // 'id' => 3,
                'name' => 'join_1_n',
            ),
            array (
                // 'id' => 4,
                'name' => 'join_n_m',
            ),
            array (
                // 'id' => 5,
                'name' => 'table_view',
            ),
            array (
                // 'id' => 6,
                'name' => 'temporary',
            ),
            array (
                // 'id' => 7,
                'name' => 'join_n_m_map',
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

        \DB::statement("alter sequence admin.db_table_types_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
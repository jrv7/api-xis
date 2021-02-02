<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTableTypesTableSeeder extends Seeder
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
            0 => 
            array (
                'id' => 1,
                'name' => 'normal',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'join_1_1',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'join_1_n',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'join_n_m',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'table_view',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'temporary',
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
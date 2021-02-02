<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTableRelationTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_relation_types';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'INNER',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'LEFT',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'OUTER',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'LEFT OUTER',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'INNER OUTER',
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

        \DB::statement("alter sequence admin.db_table_relation_types_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
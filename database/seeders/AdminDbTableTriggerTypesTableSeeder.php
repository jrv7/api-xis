<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDbTableTriggerTypesTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_trigger_types';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'ON_INSERT',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'ON_UPDATE',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'ON_DELETE',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'ON_SELECT',
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

        \DB::statement("alter sequence admin.db_table_trigger_types_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
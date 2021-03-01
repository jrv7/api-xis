<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDbTableTriggersTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_triggers';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 2,
                'table_id' => 11,
                'table_trigger_type_id' => 1,
                'description' => 'DB table fields > Insert new field',
            ),
            1 => 
            array (
                'id' => 1,
                'table_id' => 11,
                'table_trigger_type_id' => 2,
                'description' => 'DB table fields > Update field',
            ),
            2 => 
            array (
                'id' => 3,
                'table_id' => 11,
                'table_trigger_type_id' => 1,
                'description' => 'DB table fields > Update just inserted field data',
            ),
            3 => 
            array (
                'id' => 4,
                'table_id' => 6,
                'table_trigger_type_id' => 1,
                'description' => 'Criar arquivo Model.php para a tabela',
            ),
            4 => 
            array (
                'id' => 5,
                'table_id' => 6,
                'table_trigger_type_id' => 2,
                'description' => 'Criar arquivo Model.php para a tabela',
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

        \DB::statement("alter sequence admin.db_table_triggers_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminSystemsTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'systems';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Xis',
                'hash' => 'c0fc6ad66b4f22df48f1fed21d34867c',
                'encrypted_urls' => true,
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

        \DB::statement("alter sequence admin.systems_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
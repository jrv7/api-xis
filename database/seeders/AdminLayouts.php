<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminLayouts extends XisSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'layouts';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'yeti'
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

        \DB::statement("alter sequence admin.{$tableName}_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}

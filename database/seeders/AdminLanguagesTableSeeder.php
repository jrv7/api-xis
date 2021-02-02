<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminLanguagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'languages';

        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'PT-Br',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'En',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Sp',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Fr',
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

        \DB::statement("alter sequence admin.languages_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
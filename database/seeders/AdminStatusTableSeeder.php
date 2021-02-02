<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminStatusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'status';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'ACTIVE',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'INACTIVE',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'DELETED',
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

        \DB::statement("alter sequence admin.status_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
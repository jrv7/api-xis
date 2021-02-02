<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDatabasesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'databases';
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'admin',
                'db_connection' => 'pgsql_admin',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'csm',
                'db_connection' => 'pgsql_cms',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'mtg',
                'db_connection' => 'pgsql_mtg',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'pravaler',
                'db_connection' => 'pgsql_pravaler',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'postgres',
                'db_connection' => 'pgsql_postgres',
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

        \DB::statement("alter sequence admin.databases_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
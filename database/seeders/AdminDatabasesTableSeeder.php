<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDatabasesTableSeeder extends XisSeeder
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
        
        \DB::table($tableName)->insert(
            [
                [
                    'dbhash' => self::getUniqueDbHash('databases', 'D', 8),
                    'name' => 'admin',
                    'db_connection' => 'pgsql_admin',
                    'root' => true
                ],
                [
                    'dbhash' => self::getUniqueDbHash('databases', 'D', 8),
                    'name' => 'cms',
                    'db_connection' => 'pgsql_cms',
                    'root' => false
                ]
            ]
        );
        
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
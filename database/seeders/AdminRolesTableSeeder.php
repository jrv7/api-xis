<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminRolesTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'roles';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                // 'id' => 1,
                'name' => 'admin',
                'display_name' => 'USER_ROLE_ADMIN',
                'description' => NULL,
            ),
            1 => 
            array (
                // 'id' => 2,
                'name' => 'read-only',
                'display_name' => 'USER_ROLE_READ_ONLY',
                'description' => 'Perfil somente leitura'
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

        \DB::statement("alter sequence admin.roles_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
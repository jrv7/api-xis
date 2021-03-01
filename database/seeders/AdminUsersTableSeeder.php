<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminUsersTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'users';

        // \DB::table($tableName)->delete();

        \DB::table($tableName)->insert(
            [
                [
                    'name' => 'Master user',
                    'email' => 'admin@xis.com',
                    'email_verified_at' => date('Y-m-d H:i:s'),
                    'password' => \Hash::make('admin@xis.com'),
                    'remember_token' => \Hash::make(md5(rand(1, 255))),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'superuser' => true,
                ],
                [
                    'name' => 'Valdenir Junior',
                    'email' => 'valdenir.junior.v7@gmail.com',
                    'email_verified_at' => date('Y-m-d H:i:s'),
                    'password' => \Hash::make('valdenir.junior.v7@gmail.com'),
                    'remember_token' => \Hash::make('valdenir.junior.v7@gmail.com'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'superuser' => false,
                ],
                [
                    'name' => 'Usuario2',
                    'email' => 'usuario2@xis-commerce.com',
                    'email_verified_at' => date('Y-m-d H:i:s'),
                    'password' => \Hash::make('usuario2@xis-commerce.com'),
                    'remember_token' => \Hash::make('usuario2@xis-commerce.com'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'superuser' => false,
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

        \DB::statement("alter sequence admin.users_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}

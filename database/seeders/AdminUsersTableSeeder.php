<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminUsersTableSeeder extends Seeder
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

        \DB::table($tableName)->insert(array (
            0 =>
            array (
                'id' => 2,
                'name' => 'Valdenir Junior',
                'email' => 'valdenir.junior.v7@gmail.com',
                'password' => '$2y$10$JOK/wPz2EWewkzqpBv7RP.7JQwHsXY3zcY1jtcH2WpU2ESOr1oKDS',
                'remember_token' => 'MBYLlJgeOAHN4D91z1259jvGGNFrxOwfYqYuNn1Z77mrm29qYTvtx88pueXj',
                'created_at' => '2017-11-02 21:49:30',
                'updated_at' => '2017-11-03 08:56:06',
                'superuser' => 1
            ),
            1 =>
            array (
                'id' => 3,
                'name' => 'Usuario2',
                'email' => 'usuario2@xis-commerce.com',
                'password' => '$2y$10$JOK/wPz2EWewkzqpBv7RP.7JQwHsXY3zcY1jtcH2WpU2ESOr1oKDS',
                'remember_token' => '9FZHKcEv7ds0p5dneBiF0LVArusOpdsVRTegzhcvwHwtBa5WZ2B58fRuB1pH',
                'created_at' => '2017-11-03 04:49:12',
                'updated_at' => '2017-11-03 04:49:15',
                'superuser' => 0
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

        \DB::statement("alter sequence admin.users_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}

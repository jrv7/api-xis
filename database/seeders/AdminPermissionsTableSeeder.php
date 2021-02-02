<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminPermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'permissions';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            0 => 
            array (
                'id' => 3,
                'name' => 'update',
                'display_name' => 'Update',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'fa_icon_class' => 'edit',
            ),
            1 => 
            array (
                'id' => 4,
                'name' => 'delete',
                'display_name' => 'Delete',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'fa_icon_class' => 'times',
            ),
            2 => 
            array (
                'id' => 1,
                'name' => 'create',
                'display_name' => 'Create',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'fa_icon_class' => 'file-o',
            ),
            3 => 
            array (
                'id' => 2,
                'name' => 'read',
                'display_name' => 'View',
                'description' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
                'fa_icon_class' => 'eye',
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

        \DB::statement("alter sequence admin.permissions_id_seq restart with {$total_tabela}");

        echo PHP_EOL . PHP_EOL;
    }
}
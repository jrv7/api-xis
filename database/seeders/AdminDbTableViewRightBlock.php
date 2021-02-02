<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTableViewRightBlock extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_view_right_block';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'table_id' => 6,
                'right_table_id' => 48,
            )
        ));
    }
}

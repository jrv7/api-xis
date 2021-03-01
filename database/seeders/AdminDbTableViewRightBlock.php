<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminDbTableViewRightBlock extends XisSeeder
{
    /**
     * Run the database seeds.
     *
     * self::getTableId('SEARCH_TABLE_NAME', 1), // 
     * 
     * @return void
     */
    public function run()
    {
        $tableName = 'db_table_view_right_block';
        
        \DB::table($tableName)->delete();
        
        \DB::table($tableName)->insert(array (
            array (
                'table_id' => self::getTableId('db_tables', 1), // 6,
                'right_table_id' => self::getTableId('db_table_triggers', 1), // 48,
            )
        ));
    }
}

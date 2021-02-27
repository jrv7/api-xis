<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminDbTableViewRightBlock extends Seeder
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

    private static function getTableId($table_name, $database_id = 1)
    {
        $_table = \DB::table('db_tables')
            ->where('database_id', $database_id)
            ->where('name', $table_name)
            ->get();

        if ($_table->isNotEmpty()) {
            return $_table->first()->id;
        } else {
            return null;
        }
    }
}

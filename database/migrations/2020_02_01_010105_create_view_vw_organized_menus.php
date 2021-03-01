<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewVwOrganizedMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // DB::statement("CREATE OR REPLACE VIEW vw_organized_menus AS 
        // SELECT
        //     gm.id AS grandfather_menu_id, 
        //     gm.menu_title AS grandfather_menu_title, 
        //     fm.id AS father_menu_id, 
        //     fm.menu_title AS father_menu_title, 
        //     m.id, 
        //     m.menu_title 
        // FROM menus m 
        // LEFT JOIN menus fm ON fm.id = m.father_menu_id 
        // LEFT JOIN menus gm ON gm.id = fm.father_menu_id;"
        // );

        // $id_table = DB::table('db_tables')->insertGetId([
        //     'database_id' => 1,
        //     'name' => 'vw_organized_menus',
        //     'table_type_id' => $this->getTableTypeId('table_view'),
        //     'model' => 'Nothing',
        //     'has_timestamps' => false,
        //     'has_soft_delete' => false,
        //     'indexable' => false
        // ]);

        // if ($id_table) {
        //     $fields = [
        //         [
        //             'table_id' => $id_table,
        //             'type_id' => $this->getTableFieldTypeId('bigint'), // 1,
        //             'name' => 'id'
        //         ],
        //         [
        //             'table_id' => $id_table,
        //             'type_id' => $this->getTableFieldTypeId('string'), //2,
        //             'name' => 'menu_title'
        //         ],
        //         [
        //             'table_id' => $id_table,
        //             'type_id' => $this->getTableFieldTypeId('bigint'), // 1,
        //             'name' => 'father_menu_id'
        //         ],
        //         [
        //             'table_id' => $id_table,
        //             'type_id' => $this->getTableFieldTypeId('string'), //2,
        //             'name' => 'father_menu_title'
        //         ],
        //         [
        //             'table_id' => $id_table,
        //             'type_id' => $this->getTableFieldTypeId('bigint'), // 1,
        //             'name' => 'grandfather_menu_id'
        //         ],
        //         [
        //             'table_id' => $id_table,
        //             'type_id' => $this->getTableFieldTypeId('string'), //2,
        //             'name' => 'grandfather_menu_title'
        //         ],
        //     ];


        //     foreach ($fields as $field) {
        //         $id_table = DB::table('db_table_fields')->insertGetId($field);
        //     }
        // }
    }

    // private function getTableTypeId($type_name)
    // {
    //     $_table_type = \DB::table('db_table_types')
    //         ->where('name', $type_name)
    //         ->get();

    //     if ($_table_type->isNotEmpty()) {
    //         return $_table_type->first()->id;
    //     } else {
    //         return self::getTableTypeId('normal');
    //     }
    // }

    // private function getTableFieldTypeId($type_name)
    // {
    //     $_table_type = \DB::table('db_table_field_types')
    //         ->where('name', $type_name)
    //         ->get();

    //     if ($_table_type->isNotEmpty()) {
    //         return $_table_type->first()->id;
    //     } else {
    //         return self::getTableFieldTypeId('bigint');
    //     }
    // }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        // $Tables = DB::table('db_tables')
        //     ->select('id')
        //     ->where('name', 'vw_organized_menus')
        //     ->get();

        // if ($Tables) {
        //     foreach ($Tables as $Table) {
        //         $fields = [
        //             'id',
        //             'menu_title',
        //             'father_menu_id',
        //             'father_menu_title',
        //             'grandfather_menu_id',
        //             'grandfather_menu_title'
        //         ];

        //         foreach ($fields as $field) {
        //             DB::table('db_table_fields')
        //                 ->where('table_id', $Table->id)
        //                 ->where('name', $field)
        //                 ->delete();
        //         }
                
        //         DB::table('db_tables')->where('name', 'vw_organized_menus')
        //             ->delete();
        //     }
        // }
    }
}

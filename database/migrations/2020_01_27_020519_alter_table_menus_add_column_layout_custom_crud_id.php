<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableMenusAddColumnLayoutCustomCrudId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'menus';
    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('layout_custom_crud_id')->unsigned()->references('id')->on('layout_custom_cruds')->nullable();
        });

        // $TableMenus = DB::table('db_tables')->where('name', 'menus')->get();

        // if ($TableMenus) {
        //     $TableMenus = $TableMenus->first();

        //     DB::table('db_table_fields')->insert([
        //         'table_id' => $TableMenus->id,
        //         'type_id' => 10,
        //         'name' => 'layout_custom_crud_id',
        //         'primary_key' => false,
        //         'not_null' => false,
        //         'unique' => false
        //     ]);

        //     $InsertedField = DB::table('db_table_fields')
        //         ->where('table_id', $TableMenus->id)
        //         ->where('name', 'layout_custom_crud_id')
        //         ->get();
            
        //     if ($InsertedField) {
        //         $InsertedField = $InsertedField->first();

        //         $CustomCrudTable = DB::table('db_tables')->where('name', 'layout_custom_cruds')->get();
        //         if ($CustomCrudTable) {
        //             $CustomCrudTable = $CustomCrudTable->first();

        //             $CustomCrudTableIdField = DB::table('db_table_fields')
        //                 ->where('table_id', $CustomCrudTable->id)
        //                 ->where('name', 'id')
        //                 ->get();

        //             if ($CustomCrudTableIdField) {
        //                 $CustomCrudTableIdField = $CustomCrudTableIdField->first();

        //                 $CustomCrudTableNameField = DB::table('db_table_fields')
        //                     ->where('table_id', $CustomCrudTable->id)
        //                     ->where('name', 'name')
        //                     ->get();

        //                 if ($CustomCrudTableNameField) {
        //                     $CustomCrudTableNameField = $CustomCrudTableNameField->first();

        //                     DB::table('db_table_field_joins')->insert([
        //                         'relation_type_id' => 2,
        //                         'local_field_id' => $InsertedField->id,
        //                         'remote_field_id' => $CustomCrudTableIdField->id,
        //                         'remote_visible_field_id' => $CustomCrudTableNameField->id
        //                     ]);
        //                 }
        //             }
        //         }
        //     }
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('layout_custom_crud_id');
        });
    }
}

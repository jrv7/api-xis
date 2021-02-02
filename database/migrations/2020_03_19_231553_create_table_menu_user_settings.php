<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMenuUserSettings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'menu_user_settings';

    public function up()
    {
        // Schema::create(self::TABLENAME, function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('user_id')->unsigned()->references('id')->on('users');
        //     $table->bigInteger('menu_id')->unsigned()->references('id')->on('menus');
        //     $table->text('settings')->nullable();
        //     $table->timestamps();
        // });

        // DB::table('db_tables')->insert(
        //     array(
        //         'database_id' => 1,
        //         'name' => self::TABLENAME,
        //         'table_type_id' => 1,
        //         'model' => 'Nothing',
        //         'has_timestamps' => true,
        //         'indexable' => false,
        //     )
        // );

        // $Table = App\Models\Admin\DbTable::where('name', self::TABLENAME)
        //     ->get();

        // if ($Table->isNotEmpty()) {
        //     $Table = $Table->first();

          
        //     DB::table('db_table_fields')->insert(
        //         [
        //             [
        //                 'table_id' => $Table->id,
        //                 'type_id' => 1,
        //                 'name' => 'id',
        //                 'primary_key' => true,
        //                 'not_null' => true,
        //                 'unique' => true,
        //             ],
        //             [
        //                 'table_id' => $Table->id,
        //                 'type_id' => 10,
        //                 'name' => 'user_id',
        //                 'primary_key' => false,
        //                 'not_null' => true,
        //                 'unique' => true,
        //             ],
        //             [
        //                 'table_id' => $Table->id,
        //                 'type_id' => 10,
        //                 'name' => 'menu_id',
        //                 'primary_key' => false,
        //                 'not_null' => true,
        //                 'unique' => false,
        //             ],
        //             [
        //                 'table_id' => $Table->id,
        //                 'type_id' => 3,
        //                 'name' => 'settings',
        //                 'primary_key' => false,
        //                 'not_null' => true,
        //                 'unique' => false,
        //             ],
        //             [
        //                 'table_id' => $Table->id,
        //                 'type_id' => 19,
        //                 'name' => 'created_at',
        //                 'primary_key' => false,
        //                 'not_null' => false,
        //                 'unique' => false,
        //             ],
        //             [
        //                 'table_id' => $Table->id,
        //                 'type_id' => 19,
        //                 'name' => 'updated_at',
        //                 'primary_key' => false,
        //                 'not_null' => false,
        //                 'unique' => false,
        //             ],
        //         ]
        //     );

        //     foreach ($Table->fields()->get() as $field) {
        //         switch ($field->name) {
        //             case 'user_id': {
        //                 $UserTable = App\Models\Admin\DbTable::where('database_id', 1)
        //                     ->where('name', 'users')
        //                     ->get();
                        
        //                 if ($UserTable->isNotEmpty()) {
        //                     $UserTable = $UserTable->first();
        //                     $UserTableIdField = $UserTable->fields()->where('name', 'id')->get();

        //                     if ($UserTableIdField->isNotEmpty()) {
        //                         $UserTableIdField = $UserTableIdField->first();

        //                         $UserTableNameField = $UserTable->fields()->where('name', 'name')->get();
                                
        //                         if ($UserTableNameField->isNotEmpty()) {
        //                             $UserTableNameField = $UserTableNameField->first();

        //                             DB::table('db_table_field_joins')->insert(
        //                                 array(
        //                                     'relation_type_id' => 1,
        //                                     'local_field_id' => $field->id,
        //                                     'remote_field_id' => $UserTableIdField->id,
        //                                     'remote_visible_field_id' => $UserTableNameField->id
        //                                 )
        //                             );

        //                             $UserTable->model = 'Nothing';
        //                             $UserTable->save();
        //                         } else die('User table name field not found');
        //                     } else die('User table ID field not found');
        //                 } else die('User table not found');
        //             } break;

        //             case 'menu_id': {
        //                 $MenuTable = App\Models\Admin\DbTable::where('database_id', 1)
        //                     ->where('name', 'menus')
        //                     ->get();
                        
        //                 if ($MenuTable->isNotEmpty()) {
        //                     $MenuTable = $MenuTable->first();
        //                     $MenuTableIdField = $MenuTable->fields()->where('name', 'id')->get();

        //                     if ($MenuTableIdField->isNotEmpty()) {
        //                         $MenuTableIdField = $MenuTableIdField->first();

        //                         $MenuTableNameField = $MenuTable->fields()->where('name', 'menu_title')->get();
                                
        //                         if ($MenuTableNameField->isNotEmpty()) {
        //                             $MenuTableNameField = $MenuTableNameField->first();

        //                             DB::table('db_table_field_joins')->insert(
        //                                 array(
        //                                     'relation_type_id' => 1,
        //                                     'local_field_id' => $field->id,
        //                                     'remote_field_id' => $MenuTableIdField->id,
        //                                     'remote_visible_field_id' => $MenuTableNameField->id
        //                                 )
        //                             );

        //                             $MenuTable->model = 'Nothing';
        //                             $MenuTable->save();
        //                         } else die('User table name field not found');
        //                     } else die('User table ID field not found');
        //                 } else die('User table not found');
        //             } break;
        //         }
        //     }
            
        //     echo PHP_EOL . PHP_EOL . '!!! RUN Model file creation endpoint !!!' . PHP_EOL . PHP_EOL;
        // } else {
        //     die(PHP_EOL . PHP_EOL . 'Tabela nao foi criada' . PHP_EOL);
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists(self::TABLENAME);
    }
}

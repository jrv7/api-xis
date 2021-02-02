<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLayoutCustomCruds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'layout_custom_cruds';
    public function up()
    {
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('system_id')->unsigned()->references('id')->on('systems');
            $table->string('name', 255);
            $table->timestamps();
            $table->softDeletes();
        });

        $TableSystems = DB::table('db_tables')->insert([
            'database_id' => 1,
            'table_type_id' => 1,
            'model' => 'Nothing',
            'has_soft_delete' => false,
            'has_timestamps' => false,
            'indexable' => false, 
            'name' => 'systems',
        ]);

        if ($TableSystems) {
            $TableSystems = DB::table('db_tables')
                ->where('name', 'systems')
                ->get();

            if ($TableSystems) {
                $TableSystems = $TableSystems->first();
                echo PHP_EOL;
                echo "> Table {$TableSystems->id} - {$TableSystems->name} created";


                $FieldsSystem = [
                    [
                        'table_id' => $TableSystems->id,
                        'type_id' => 1,
                        'name' => 'id',
                        'primary_key' => true,
                        'not_null' => false,
                        'unique' => true
                    ],
                    [
                        'table_id' => $TableSystems->id,
                        'type_id' => 2,
                        'name' => 'name',
                        'primary_key' => false,
                        'not_null' => true,
                        'unique' => false
                    ],
                    [
                        'table_id' => $TableSystems->id,
                        'type_id' => 16,
                        'name' => 'hash',
                        'primary_key' => false,
                        'not_null' => false,
                        'unique' => false
                    ],
                    [
                        'table_id' => $TableSystems->id,
                        'type_id' => 8,
                        'name' => 'encrypted_urls',
                        'primary_key' => false,
                        'not_null' => false,
                        'unique' => false
                    ],
                ];

                foreach ($FieldsSystem as $FieldSystem) {
                    $status = DB::table('db_table_fields')->insert($FieldSystem);

                    if ($status) {
                        echo PHP_EOL;
                        echo ">     Field {$FieldSystem['name']} inserted";
                    }
                }
            }
        }

        // INSERINDO A TABELA NA BASE

        $Table = DB::table('db_tables')->insert([
            'database_id' => 1,
            'table_type_id' => 1,
            'model' => 'Nothing',
            'has_soft_delete' => true,
            'has_timestamps' => true,
            'indexable' => false, 
            'name' => 'layout_custom_cruds',
        ]);

        if ($Table) {
            $Table = DB::table('db_tables')
                ->where('name', 'layout_custom_cruds')
                ->get();

            if ($Table) {
                $Table = $Table->first();
                echo PHP_EOL;
                echo "> Table {$Table->id} - {$Table->name} created";

                $Fields = [
                    [
                        'table_id' => $Table->id,
                        'type_id' => 1,
                        'name' => 'id',
                        'primary_key' => true,
                        'not_null' => false,
                        'unique' => true
                    ],
                    [
                        'table_id' => $Table->id,
                        'type_id' => 10,
                        'name' => 'system_id',
                        'primary_key' => false,
                        'not_null' => true,
                        'unique' => false
                    ],
                    [
                        'table_id' => $Table->id,
                        'type_id' => 2,
                        'name' => 'name',
                        'primary_key' => false,
                        'not_null' => true,
                        'unique' => false
                    ],
                    [
                        'table_id' => $Table->id,
                        'type_id' => 19,
                        'name' => 'created_at',
                        'primary_key' => false,
                        'not_null' => false,
                        'unique' => false
                    ],
                    [
                        'table_id' => $Table->id,
                        'type_id' => 19,
                        'name' => 'updated_at',
                        'primary_key' => false,
                        'not_null' => false,
                        'unique' => false
                    ],
                    [
                        'table_id' => $Table->id,
                        'type_id' => 19,
                        'name' => 'deleted_at',
                        'primary_key' => false,
                        'not_null' => false,
                        'unique' => false
                    ]
                ];

                foreach ($Fields as $Field) {
                    $status = DB::table('db_table_fields')->insert($Field);

                    if ($status) {
                        echo PHP_EOL;
                        echo ">     Field {$Field['name']} inserted";
                    }
                }
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(self::TABLENAME);

        $Table = DB::table('db_tables')->where('name', 'layout_custom_cruds')->get();
        if ($Table) {
            $Table = $Table->first();

            echo PHP_EOL;
            echo "> Apagando campos da tabela {$Table->name} ({$Table->id})";
            DB::table('db_table_fields')->where('table_id', $Table->id)->delete();

            echo PHP_EOL;
            echo "> Apagando a tabela {$Table->name} ({$Table->id})";
            DB::table('db_tables')->where('name', 'layout_custom_cruds')->delete();
        }
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableMenusAddColumnMirroredMenuId extends Migration
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
            $table->bigInteger('mirrored_menu_id')
                ->nullable()
                ->references('id')->on('menus');
        });

        $menu_table = DB::table('db_tables')
            ->select('id')
            ->where('name', 'menus')
            ->get();

        if ($menu_table) {
            foreach ($menu_table as $menu_table_id) {
                $menu_table_id = $menu_table_id->id;

                $field_id = DB::table('db_table_fields')->insertGetId([
                    'table_id' => $menu_table_id,
                    'type_id' => 10,
                    'name' => 'mirrored_menu_id'
                ]);

                $organized_menu_tables = DB::table('db_tables')
                    ->select('id')
                    ->where('name', 'vw_organized_menus')
                    ->get();

                if ($organized_menu_tables) {
                    foreach ($organized_menu_tables as $organized_menu_table) {
                        $organized_menu_table_field_ids = DB::table('db_table_fields')
                            ->select('id')
                            ->where('table_id', $organized_menu_table->id)
                            ->where('name', 'id')
                            ->get();

                        if ($organized_menu_table_field_ids) {
                            foreach ($organized_menu_table_field_ids as $organized_menu_table_field_id) {

                                $organized_menu_table_field_visibles = DB::table('db_table_fields')
                                    ->select('id')
                                    ->where('table_id', $organized_menu_table->id)
                                    ->where('name', 'menu_title')
                                    ->get();

                                if ($organized_menu_table_field_visibles) {
                                    foreach ($organized_menu_table_field_visibles as $organized_menu_table_field_visible) {
                                        DB::table('db_table_field_joins')->insert([
                                            'relation_type_id' => 2,
                                            'local_field_id' => $field_id,
                                            'remote_field_id' => $organized_menu_table_field_id->id,
                                            'remote_visible_field_id' => $organized_menu_table_field_visible->id
                                        ]);
                                    }
                                }
                            }
                        }
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
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('mirrored_menu_id');
        });

        $menu_table = DB::table('db_tables')
            ->select('id')
            ->where('name', 'menus')
            ->get();

        if ($menu_table) {
            foreach ($menu_table as $menu_table_id) {
                DB::table('db_table_fields')
                    ->where('table_id', $menu_table_id->id)
                    ->where('name', 'mirrored_menu_id')
                    ->delete();
            }
        }
    }
}

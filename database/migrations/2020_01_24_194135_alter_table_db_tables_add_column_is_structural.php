<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableDbTablesAddColumnIsStructural extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_tables';
    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->boolean('is_structural')->default(false)->description('Marks if the table has structural importance.');
        });

        $db_tables = DB::table(self::TABLENAME)->where('name', 'db_tables')->get();

        if ($db_tables->isNotEmpty()) {
            $db_tables = $db_tables->first();

            $field_type = DB::table('db_table_field_types')->where('name', 'boolean')->get();
            if ($field_type->isNotEmpty()) {
                $field_type = $field_type->first();

                DB::table('db_table_fields')->insert(
                    array(
                        'table_id' => $db_tables->id,
                        'type_id' => $field_type->id,
                        'name' => 'is_structural',
                        'placeholder' => 'IS_STRUCTURAL',
                        'primary_key' => false,
                        'unique' => false,
                        'default_value' => false,
                        'use_as_filter' => false
                    )
                );
            }
        }

        $db_tables = DB::table(self::TABLENAME)->where('database_id', 1)->update(['is_structural' => true]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('is_structural');
        });
    }
}

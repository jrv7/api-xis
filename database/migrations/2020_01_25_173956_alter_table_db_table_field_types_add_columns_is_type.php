<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableDbTableFieldTypesAddColumnsIsType extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_field_types';
    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->boolean('is_numeric')->default(false)->description('Marks if the field is numeric.');
            $table->boolean('is_string')->default(false)->description('Marks if the field is string.');
            $table->boolean('is_boolean')->default(false)->description('Marks if the field is boolean.');
            $table->boolean('is_datetime')->default(false)->description('Marks if the field is date or datetime.');
            $table->boolean('is_password')->default(false)->description('Marks if the field is password.');
        });

        DB::table(self::TABLENAME)->whereIn('name', [
            'bigint',
            'float',
            'currency',
            'percentage',
            'foreign',
            'int'
        ])->update([
            'is_numeric' => true
        ]);

        DB::table(self::TABLENAME)->whereIn('name', [
            'string',
            'text',
            'character',
            'preset',
            'function',
            'str_fa_icon',
            'md5',
            'from_list'
        ])->update([
            'is_string' => true
        ]);

        DB::table(self::TABLENAME)->whereIn('name', [
            'boolean'
        ])->update([
            'is_boolean' => true
        ]);

        DB::table(self::TABLENAME)->whereIn('name', [
            'date',
            'timestamp',
            'datetime',
            'time'
        ])->update([
            'is_datetime' => true
        ]);

        DB::table(self::TABLENAME)->whereIn('name', [
            'password'
        ])->update([
            'is_password' => true
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('is_numeric');
            $table->dropColumn('is_string');
            $table->dropColumn('is_boolean');
            $table->dropColumn('is_datetime');
            $table->dropColumn('is_password');
        });
    }
}

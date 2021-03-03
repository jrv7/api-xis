<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableTableFieldsAddColumnConditionalFieldColumns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_fields';
    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('conditional_field_id')->unsigned()->references('id')->on('db_table_fields')->nullable();
            $table->text('conditional_field_value')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('conditional_field_id');
            $table->dropColumn('conditional_field_value');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbRelatedTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_related_tables';

    public function up()
    {
        // Tabela db_related_tables
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('table_id')->references('id')->on('db_tables');
            $table->bigInteger('related_table_id')->references('id')->on('db_tables');
            $table->integer('relation_order')->nullable()->default(0);
            $table->bigInteger('joint_field_id')->nullable()->references('id')->on('db_table_fields');
            $table->bigInteger('joint_menu_id')->nullable()->references('id')->on('menus');
            $table->bigInteger('conditional_field_id')->nullable()->references('id')->on('db_table_fields');
            $table->text('conditional_field_value')->nullable();
            $table->primary(array('table_id', 'related_table_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::connection('pgsql_admin')->dropIfExists(self::TABLENAME);
    }
}

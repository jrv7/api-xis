<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbTableFieldLayoutAttributes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'AdminDbTableFieldLayoutAttributes';

    public function up()
    {
        // Tabela AdminDbTableFieldLayoutAttributes
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('field_id')->references('id')->on('db_table_fields');
            $table->bigInteger('layout_id')->references('id')->on('layouts');
            $table->string('name', 255);
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

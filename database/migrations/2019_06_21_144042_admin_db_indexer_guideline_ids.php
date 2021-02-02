<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbIndexerGuidelineIds extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_indexer_guideline_ids';

    public function up()
    {
        // Tabela db_indexer_guideline_ids
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('indexer_guideline_id')->references('id')->on('db_indexer_guidelines');
            $table->bigInteger('indexer_id')->references('indexer_id')->on('db_indexer_guidelines');
            $table->bigInteger('table_field_id')->references('id')->on('rb_tables');
            $table->string('id_value', 255);
            $table->primary(array('indexer_guideline_id', 'table_field_id'));
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

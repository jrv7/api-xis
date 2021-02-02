<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbIndexerLines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_indexer_lines';

    public function up()
    {
        // Tabela db_indexer_lines
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('indexer_id')->references('indexer_id')->on('db_indexer_guidelines');
            $table->bigInteger('guideline_id')->references('id')->on('db_indexer_guidelines');
            $table->timestamp('indexed_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->text('index_data');
            $table->primary(array('indexer_id', 'guideline_id'));
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

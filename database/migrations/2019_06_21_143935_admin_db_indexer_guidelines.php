<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbIndexerGuidelines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_indexer_guidelines';

    public function up()
    {
        // Tabela db_indexer_guidelines
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('indexer_id')->references('id')->on('db_indexer');
            $table->bigIncrements('id');
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

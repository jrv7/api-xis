<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbIndexer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_indexer';

    public function up()
    {
        // Tabela db_indexer
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigIncrements('id')->references('id')->on('db_tables');
            $table->bigInteger('table_id')->references('id')->on('db_tables');
            $table->timestamp('indexed_at')->default(DB::raw('CURRENT_TIMESTAMP'));
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

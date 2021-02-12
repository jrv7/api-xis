<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_tables';

    public function up()
    {
        // Tabela db_tables
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('database_id')->references('id')->on('databases');
            $table->string('name', 255);
            $table->bigInteger('table_type_id')->references('id')->on('db_table_types');
            $table->string('model', 255)->nullable();
            $table->bigInteger('default_list_action_field_id')->nullable();
            $table->bigInteger('total_rows')->default(0)->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->boolean('has_timestamps')->defaul(false);
            $table->boolean('indexable')->defaul(true);
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbUpdateHistoryChanges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_update_history_changes';

    public function up()
    {
        // Tabela db_update_history_changes
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('update_history_id')->references('id')->on('db_update_history');
            $table->bigInteger('table_field_id')->references('id')->on('db_table_fields');
            $table->text('new_value')->nullable();
            $table->primary(array('update_history_id', 'table_field_id'));
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

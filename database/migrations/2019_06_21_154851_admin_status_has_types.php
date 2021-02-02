<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminStatusHasTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'status_has_types';

    public function up()
    {
        // Tabela status_has_types
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('status_id')->references('id')->on('status');
            $table->bigInteger('status_type_id')->references('id')->on('status_types');
            $table->primary(array('status_id', 'status_type_id'));
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

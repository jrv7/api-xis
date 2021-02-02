<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminSessionNavigation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'session_navigation';

    public function up()
    {
        // Tabela session_navigation
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('session_history_id')->references('id')->on('session_history');
            $table->bigInteger('menu_id')->references('id')->on('menus');
            $table->text('accessed_url')->nullable();
            $table->text('environment_data')->nullable();
            $table->timestamp('assertion_date')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->string('url_hash', 32)->nullable();
            $table->text('session_data')->nullable();
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

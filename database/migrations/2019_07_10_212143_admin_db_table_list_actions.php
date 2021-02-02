<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbTableListActions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_list_actions';

    public function up()
    {
        // Tabela db_table_list_actions
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('table_id')->references('id')->on('db_tables');
            $table->bigInteger('target_menu_id')->references('id')->on('menus');
            $table->string('fa_icon', 128)->nullable();
            $table->string('action_order', 255)->nullable();
            $table->string('menu_crud_action', 255)->default('view');
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

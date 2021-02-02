<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminMenuListActions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'menu_list_actions';

    public function up()
    {
        // Tabela menu_list_actions
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('menu_id')->references('id')->on('menus');
            $table->bigInteger('target_menu_id')->references('id')->on('menus');
            $table->string('fa_icon', 128)->nullable();
            $table->string('action_order', 255)->nullable();
            $table->string('menu_crud_action', 255)->default('view');
            $table->primary(array('menu_id', 'target_menu_id'));
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

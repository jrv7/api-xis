<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableMenusActions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_has_action_menus', function (Blueprint $table) {
            $table->bigInteger('menu_id')->references('id')->on('menus');
            $table->bigInteger('target_menu_id')->references('id')->on('menus');
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
        Schema::dropIfExists('menu_has_action_menus');
    }
}

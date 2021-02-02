<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminMenusRelated extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'menus_related';

    public function up()
    {
        // Tabela menus_related
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('menu_id')->references('id')->on('menus');
            $table->bigInteger('related_menu_id')->references('id')->on('menus');
            $table->string('menu_crud_action', 128)->nullable();
            $table->primary(array('menu_id', 'related_menu_id'));
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

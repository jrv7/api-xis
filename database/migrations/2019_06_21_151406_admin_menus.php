<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminMenus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'menus';

    public function up()
    {
        // Tabela menus
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('system_id')->references('id')->on('systems');
            $table->bigInteger('father_menu_id')->nullable();
            $table->string('menu_title', 255);
            $table->string('route', 255)->nullable();
            $table->boolean('opt_show_menu')->nullable()->default(true);
            $table->string('class_fa_icon', 255)->nullable();
            $table->string('menu_url_hash', 32);
            $table->bigInteger('table_id')->nullable()->references('id')->on('db_tables');
            $table->bigInteger('return_to_menu_id')->nullable();
            $table->string('custom_crud_view', 255)->nullable();
            $table->string('custom_controller', 255)->nullable();
            $table->string('custom_first_method_post', 255)->nullable();
            $table->string('custom_first_method_get', 255)->nullable();
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

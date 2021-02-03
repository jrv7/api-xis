<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminRoleMenuPermission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'role_has_menu_has_permission';

    public function up()
    {
        // Tabela role_menu_permission
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('role_id')->references('id')->on('roles');
            $table->bigInteger('menu_id')->references('id')->on('menus');
            $table->bigInteger('permission_id')->references('id')->on('permissions');
            $table->bigInteger('target_menu_id')->nullable()->references('id')->on('menus');
            $table->primary(array('role_id', 'menu_id', 'permission_id'));
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

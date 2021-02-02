<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminPermissionRole extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'permission_role';

    public function up()
    {
        // Tabela permission_role
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('permission_id')->references('id')->on('permissions');
            $table->bigInteger('role_id')->references('id')->on('roles');
            $table->primary(array('permission_id', 'role_id'));
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

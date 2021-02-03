<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminPermissionUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'user_has_permissions';

    public function up()
    {
        // Tabela permission_user
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->bigInteger('permission_id')->references('id')->on('permissions');
            $table->string('user_type', 255);
            $table->primary(array('permission_id', 'user_id'));
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

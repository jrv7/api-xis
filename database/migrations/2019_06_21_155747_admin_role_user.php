<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminRoleUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'role_user';

    public function up()
    {
        // Tabela role_user
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('role_id')->references('id')->on('roles');
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->string('user_type', 255);
            $table->primary(array('role_id', 'user_id'));
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

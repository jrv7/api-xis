<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableRoleHasPermissionsInTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_has_permissions_in_tables', function (Blueprint $table) {
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('permission_id')->unsigned()->nullable();
            $table->bigInteger('table_id')->unsigned()->nullable();

            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->foreign('table_id')->references('id')->on('db_tables');

            $table->primary(['role_id', 'permission_id', 'table_id']);
            $table->unique(['role_id', 'permission_id', 'table_id']);
        });

        // DB::statement("CREATE UNIQUE INDEX r_p_t_no_t_unique ON role_has_permissions_in_tables (role_id, permission_id) WHERE table_id IS NULL;");
        // DB::statement("CREATE UNIQUE INDEX r_p_t_no_p_unique ON role_has_permissions_in_tables (role_id, table_id) WHERE permission_id IS NULL;");
        // DB::statement("CREATE UNIQUE INDEX r_p_t_no_p_no_t_unique ON role_has_permissions_in_tables (role_id) WHERE table_id IS NULL AND permission_id IS NULL;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('role_has_permissions_in_tables');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminSystemUserConfigs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'system_user_configs';

    public function up()
    {
        // Tabela system_user_configs
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('system_id')->references('id')->on('systems');
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->text('configs');
            $table->primary(array('system_id', 'user_id'));
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

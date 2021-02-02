<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbTableUserConfigurations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_user_configurations';

    public function up()
    {
        // Tabela db_table_user_configurations
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('table_id')->references('id')->on('db_tables');
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->json('name')->nullable();
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDatabases extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'databases';

    public function up()
    {
        // Tabela databases
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dbhash', 8)->unique()->nullable();
            $table->bigInteger('system_id')->references('id')->on('systems');
            $table->string('name', 255)->unique();
            $table->string('db_connection', 255)->nullable();
            $table->boolean('root')->default(false);
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

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminSystems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'systems';

    public function up()
    {
        // Tabela systems
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('dbhash', 8)->unique();
            $table->boolean('encrypted_urls')->default(true);
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

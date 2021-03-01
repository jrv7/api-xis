<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCurrencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'currencies';

    public function up()
    {
        // Schema::connection('pgsql_cms')->create(self::TABLENAME, function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('country_id')->unsigned()->references('id')->on('countries');
        //     $table->string('name', 255);
        //     $table->string('code', 64);
        //     $table->string('symbol', 64);
        //     $table->timestamps();
        //     $table->softDeletes();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::connection('pgsql_cms')->dropIfExists(self::TABLENAME);
    }
}

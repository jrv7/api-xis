<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrices extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'prices';

    public function up()
    {
        // Schema::connection('pgsql_cms')->create(self::TABLENAME, function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('article_id')->unsigned()->references('id')->on('articles');
        //     $table->bigInteger('currency_id')->unsigned()->references('id')->on('currencies');
        //     $table->float('value');
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

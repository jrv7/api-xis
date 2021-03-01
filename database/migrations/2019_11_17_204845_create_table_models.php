<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableModels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'models';

    public function up()
    {
        // Schema::connection('pgsql_cms')->create(self::TABLENAME, function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('product_id')->unsigned()->references('id')->on('products');
        //     $table->bigInteger('color_id')->unsigned()->references('id')->on('colors');
        //     $table->bigInteger('status_id')->unsigned()->references('id')->on('status');
        //     $table->string('name', 255);
        //     $table->text('description')->nullable();
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

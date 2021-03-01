<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableModelPictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'model_pictures';

    public function up()
    {
        // Schema::connection('pgsql_cms')->create(self::TABLENAME, function (Blueprint $table) {
        //     $table->bigIncrements('id');
        //     $table->bigInteger('model_id')->unsigned()->references('id')->on('models');
        //     $table->string('name', 255);
        //     $table->string('path', 255)->nullable();
        //     $table->string('url', 255)->nullable();
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

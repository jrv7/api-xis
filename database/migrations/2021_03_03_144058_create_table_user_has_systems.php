<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUserHasSystems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_systems', function (Blueprint $table) {
            $table->bigInteger('user_id')->references('id')->on('users');
            $table->bigInteger('system_id')->references('id')->on('systems');
            $table->primary(array('user_id', 'system_id'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_systems');
    }
}

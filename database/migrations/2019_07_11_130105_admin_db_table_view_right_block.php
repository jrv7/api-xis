<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbTableViewRightBlock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_view_right_block';

    public function up()
    {
        // Tabela db_table_view_right_block
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('table_id')->references('id')->on('db_tables');
            $table->bigInteger('right_table_id')->references('id')->on('db_tables');
            $table->primary(array('table_id', 'right_table_id'));
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

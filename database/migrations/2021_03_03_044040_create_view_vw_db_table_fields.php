<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewVwDbTableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("CREATE OR REPLACE VIEW vw_db_table_fields AS 
            SELECT 
                tf.id AS id,
                tf.table_id AS table_id,
                tf.type_id AS type_id,
                tf.name AS name
            FROM db_table_fields tf
        "
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vw_db_table_fields');
    }
}

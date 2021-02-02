<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbTableFieldJoins extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_field_joins';

    public function up()
    {
        // Tabela db_table_field_joins
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('relation_type_id')->references('id')->on('db_table_relation_types')->default(1);
            $table->bigInteger('local_field_id')->references('id')->on('db_table_fields');
            $table->bigInteger('remote_field_id')->references('id')->on('db_table_fields');
            $table->string('nofield_join_value', 255)->nullable();
            $table->bigInteger('remote_visible_field_id')->nullable()->references('id')->on('db_table_fields');
            $table->string('model_foreign_function', 255)->nullable();
            $table->bigInteger('table_type_id')->nullable()->references('id')->on('db_table_types');
            $table->primary(array('relation_type_id', 'local_field_id', 'remote_field_id'));
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

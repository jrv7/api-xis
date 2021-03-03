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
            $table->bigInteger('local_field_id')->references('id')->on('db_table_fields');
            $table->bigInteger('local_table_id')->references('id')->on('db_tables');
            $table->bigInteger('remote_field_id')->references('id')->on('db_table_fields');
            $table->bigInteger('remote_table_id')->references('id')->on('db_tables');
            $table->bigInteger('relation_type_id')->references('id')->on('db_table_relation_types')->default(1);
            // $table->string('nofield_join_value', 255)->nullable();
            $table->bigInteger('remote_visible_field_id')->nullable()->references('id')->on('db_table_fields');
            $table->bigInteger('filter_field_id')->nullable()->references('id')->on('db_table_fields');
            $table->string('model_foreign_function', 255)->nullable();
            $table->boolean('can_be_mapped')->default(true);
            $table->primary(array('local_field_id', 'remote_field_id', 'relation_type_id'));
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

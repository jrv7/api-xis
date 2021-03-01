<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdminDbTableFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_fields';

    public function up()
    {
        // Tabela db_table_fields
        Schema::create(self::TABLENAME, function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dbhash', 32)->unique()->nullable();
            $table->bigInteger('table_id')->references('id')->on('db_tables');
            $table->bigInteger('type_id')->references('id')->on('db_table_field_types');
            $table->string('name', 255);
            $table->string('placeholder', 255)->nullable();
            $table->string('help_text', 255)->nullable();
            $table->boolean('primary_key')->default(false);
            $table->boolean('not_null')->default(false);
            $table->boolean('unique')->default(false);
            $table->text('default_value')->nullable();
            $table->integer('min_length')->nullable();
            $table->integer('max_length')->nullable();
            $table->boolean('fillable')->default(true);
            $table->boolean('editable')->default(true);
            $table->boolean('display_in_lists')->default(true);
            $table->boolean('translate_in_lists')->default(false);
            $table->integer('display_order')->default(0)->nullable();
            $table->string('crud_edit_validation_type', 255)->nullable();
            $table->text('crud_edit_validation_function')->nullable();
            $table->boolean('email')->default(false);
            $table->boolean('is_elasticsearchable')->default(true);
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

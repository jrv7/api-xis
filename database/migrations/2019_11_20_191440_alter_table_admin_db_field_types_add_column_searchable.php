<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableAdminDbFieldTypesAddColumnSearchable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_field_types';

    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->boolean('is_searchable')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('is_searchable');
        });
    }
}

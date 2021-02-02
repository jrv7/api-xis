<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterDbTableFieldsAddIsAppendable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_table_fields';

    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->boolean('is_appendable')->nullable()->default(false);
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
            $table->dropColumn('is_appendable');
        });
    }
}

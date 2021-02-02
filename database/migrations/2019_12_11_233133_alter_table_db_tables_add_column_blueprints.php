<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableDbTablesAddColumnBlueprints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'db_tables';

    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->string('last_structure_change', 32)->nullable()->description('Gets the MD5 value of the last updated time of this table structure.');
            $table->longtext('blueprints')->nullable();
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
            $table->dropColumn('last_structure_change');
            $table->dropColumn('blueprints');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableMenusRelatedAddColumnJointFieldId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'menus_related';
    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('joint_field_id')->nullable()->description('Foreign ID of primary field of related menu table.');
        });
        //joint_field_id
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('joint_field_id');
        });
    }
}

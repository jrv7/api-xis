<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableUsersAddDefaultMenuId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    private const TABLENAME = 'users';

    public function up()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->bigInteger('default_menu_id')
                ->nullable()
                ->references('id')->on('menus');
        });

        $MenuAdminListUsers = DB::table('menus')
            ->where('menu_url_hash', 'bf4fc0f7f9966228b29a2b6e1813f0b7')
            ->get();

        if ($MenuAdminListUsers->isNotEmpty()) {
            $MenuAdminListUsers = $MenuAdminListUsers->first();

            DB::table(self::TABLENAME)
                ->whereRaw('1=1')
                ->update([
                    'default_menu_id' => $MenuAdminListUsers->id
                ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table(self::TABLENAME, function (Blueprint $table) {
            $table->dropColumn('default_menu_id');
        });
    }
}

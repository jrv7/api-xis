<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TableUserCreateMasterAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // \DB::connection('admin')
        //     ->table('users')
        //     ->insert([
        //         [
        //             'id' => 1,
        //             'name' => 'Maverick',
        //             'email' => 'admin@xis.com',
        //             'email_verified_at' => date('Y-m-d H:i:s'),
        //             'password' => \Hash::make('senha0182.'),
        //             'remember_token' => \Hash::make(md5(rand(1, 255))),
        //             'superuser' => true
        //         ]
        //     ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

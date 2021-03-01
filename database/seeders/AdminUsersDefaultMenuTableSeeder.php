<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminUsersDefaultMenuTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'users';

        // \DB::table($tableName)->delete();

        \DB::table('users')
            ->where('email', 'admin@xis.com')
            ->update([
                'default_menu_id' => self::getMenuId('bf4fc0f7f9966228b29a2b6e1813f0b7')
            ]);
    }
}

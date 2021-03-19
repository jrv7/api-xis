<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminUserHasSystemsTableSeeder extends XisSeeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'user_has_systems';

        // \DB::table($tableName)->delete();
        $Users = \DB::table('users')
            ->get();

        if ($Users->isNotEmpty()) {
            foreach ($Users as $User) {
                \DB::table($tableName)->insert(
                    [
                        [
                            'user_id' => $User->id,
                            'system_id' => self::getSystemId('XC0FC6AD')
                        ]
                    ]
                );
            }
        }
    }
}

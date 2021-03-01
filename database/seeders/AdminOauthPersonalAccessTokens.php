<?php

namespace Database\Seeders;

use Database\Seeders\XisSeeder;

class AdminOauthPersonalAccessTokens extends XisSeeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'oauth_personal_access_clients';

        \DB::table($tableName)->delete();

        \DB::table($tableName)->insert(array (
            0 => array (
                'id' => '1',
                'client_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )
        ));
    }
}

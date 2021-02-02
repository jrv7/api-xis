<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminOauthAccessTokens extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'oauth_access_tokens';

        \DB::table($tableName)->delete();

        \DB::table($tableName)->insert(array (
            0 => array (
                'id' => 'b27183640412a47e9da57e1d611b89a707df6921c1ca85ce728226b09748b7428822d4d2bd965157',
                'user_id' => 1,
                'client_id' => 3,
                'name' => null,
                'scopes' => '[]',
                'revoked' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'expires_at' => date('Y-m-d H:i:s', strtotime(time() . ' +1 month'))
            ),
        ));
    }
}

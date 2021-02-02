<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminOauthRefreshTokens extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'oauth_refresh_tokens';

        \DB::table($tableName)->delete();

        \DB::table($tableName)->insert(array (
            0 => array (
                'id' => '233f3483bc90a2ca57f9be79e9261e1246a635be2e0ad095502d2dc3c7764c9b61e4fbb8a69e990b',
                'access_token_id' => 'b27183640412a47e9da57e1d611b89a707df6921c1ca85ce728226b09748b7428822d4d2bd965157',
                'revoked' => false,
                'expires_at' => date('Y-m-d H:i:s', strtotime(time() . ' +1 month'))
            )
        ));
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminOauthClientsSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $tableName = 'oauth_clients';

        \DB::table($tableName)->delete();


        \DB::table($tableName)->insert(array (
            0 => array (
                'id' => 1,
                'user_id' => null,
                'name' => 'Xis-API Personal Access Client',
                'secret' => 'DLI1IPsUQcKNdXVcc4cKzn8BBUi18JNAVPFvSaDk',
                'redirect' => 'http://localhost',
                'personal_access_client' => true,
                'password_client' => false,
                'revoked' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            1 => array (
                'id' => 2,
                'user_id' => null,
                'name' => 'Xis-API Password Grant Client',
                'secret' => '8uHZ8JycPOLI0Wkza6zNIePxRYO0kn1mBKyZotSu',
                'redirect' => 'http://localhost',
                'personal_access_client' => false,
                'password_client' => true,
                'revoked' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ),
            2 => array (
                'id' => 3,
                'user_id' => 1,
                'name' => 'maverick',
                'secret' => '2k64NW0aRQ9rjDHwpHJazEj9P88j8rGUHPP7Vpbi',
                'redirect' => 'none',
                'personal_access_client' => false,
                'password_client' => true,
                'revoked' => false,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            )
        ));
    }
}

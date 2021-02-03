<?php

return [
    'grant_type' =>  env('PASSPORT_GRANT_TYPE', 'undefined'),
    'client_id' => env('PASSPORT_CLIENT_ID', 'undefined'),
    'client_secret' => env('PASSPORT_CLIENT_SECRET', 'undefined'),
    'client_secret_expire' => env('PASSPORT_CLIENT_SECRET_EXPIRE_PERIODE', 'undefined'),
    'oauth_client_login_url' => env('PASSPORT_CLIENT_LOGIN_URL', 'undefined'),
    'allowed_cors_origins' => explode(',', env('XIS_API_CORS_ALLOWED_ORINGINS', 'undefined')),
    'filesystem_cloud' => env('FILESYSTEM_CLOUD', 'local'),
];

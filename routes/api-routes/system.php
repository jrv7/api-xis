<?php

use Illuminate\Http\Request;

Route::group([
    'prefix'=>'system', 
    'middleware' => [
        'xis-cors', 
        'auth:api'
    ]
], function () {
    Route::group(['prefix'=>'menus'], function () {
        Route::get('root', [App\Http\Controllers\Admin\UserController::class, 'getMainMenus']);
    });
});

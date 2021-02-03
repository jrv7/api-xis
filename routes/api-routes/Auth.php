<?php

use Illuminate\Http\Request;

// Route::middleware('xis-cors')->post('/register', 'Api\AuthController@register')->name('register.new.user');
Route::middleware('xis-cors')
    ->post('login', [
        App\Http\Controllers\Api\AuthController::class, 'auth'
    ]
)->name('auth.login');
Route::middleware(['xis-cors', 'auth:api'])
    ->get('user/logged', [
        App\Http\Controllers\Api\AuthController::class, 'loggedUserData'
    ]
)->name('auth.user.data');
// Route::middleware('xis-cors')->post('/login', 'Api\AuthController@clientLogin');
// Route::middleware(['xis-cors', 'auth:api'])->get('/validate-login', 'Api\AuthController@validateToken');
// Route::middleware(['xis-cors', 'auth:api'])->post('logout', 'Api\AuthController@clientLogout');

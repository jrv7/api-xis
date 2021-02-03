<?php

use Illuminate\Http\Request;

Route::group(['prefix'=>'ping', 'middleware' => ['xis-cors', 'auth:api']], function ()
{
    Route::get('',function () {
        dd('Ping Ok');
    });
});

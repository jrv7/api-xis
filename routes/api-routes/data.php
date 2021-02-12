<?php

use Illuminate\Http\Request;

Route::group([
    'prefix'=>'data', 
    'middleware' => [
        'xis-cors', 
        'auth:api'
    ]
], function () {
    Route::group(['prefix'=>'list'], function () {
        Route::get('{table}', [App\Http\Controllers\Admin\DataController::class, 'getList']);
    });
    Route::get('get-as-option/{table}/{visibleField?}', [App\Http\Controllers\Admin\DataController::class, 'getListOfOptionsByTable']);
});

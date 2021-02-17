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
    Route::group(['prefix'=>'view'], function () {
        Route::get('by-menu/{menu_hash}/{ids}', [App\Http\Controllers\Admin\DataController::class, 'getDataByMenu']);
    });
    Route::get('get-as-option/{table}/{visibleField?}', [App\Http\Controllers\Admin\DataController::class, 'getListOfOptionsByTable']);
});
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
        Route::get('root/{mainMenuHash}/submenus', [App\Http\Controllers\Admin\UserController::class, 'getSubmenus']);
    });
    Route::group(['prefix'=>'blueprints'], function () {
        Route::get('by-menu/{menu_has}', [App\Http\Controllers\Admin\SystemController::class, 'fetchBlueprintsByMenu']);
        Route::get('by-table/{table}', [App\Http\Controllers\Admin\SystemController::class, 'fetchBlueprintsByTable']);
    });
    Route::group(['prefix'=>'db-structure'], function () {
        Route::get('make-model/{table_id?}', [App\Http\Controllers\Admin\SystemController::class, 'makeModelFile']);
    });

    Route::group(['prefix'=>'dictionary'], function () {
        Route::get('', [App\Http\Controllers\Admin\SystemController::class, 'getDictionary']);
    });
});

<?php

/*
|--------------------------------------------------------------------------
| API Modules init file
|--------------------------------------------------------------------------
|
| Here is where you can initialize the routes of the API grouped by 'module'.
| Each file required here corresponds to a 'module' wich is a group of routes
*/
$modules = glob(__DIR__.'/*.php');
foreach($modules as $module){
    require_once($module);
}

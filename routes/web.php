<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/json', function () {
    return response()->json();
});

$router->get('/GetAllWeapons', 'WeaponController@show');
$router->get('/GetAllUsers', 'UserController@show');
$router->get('/GetTallies', 'TallyController@show');
$router->get('/GetSovs', 'TallyController@showjoin');
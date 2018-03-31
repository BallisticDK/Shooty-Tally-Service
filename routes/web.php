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

// Users
$router->group(['prefix' => 'users'], function () use ($router) {
    $router->get('/', 'UserController@getAll');
    $router->get('/{user}', 'UserController@getOne');
});

// Tallies
$router->group(['prefix' => 'tallies'], function () use ($router) {
    $router->get('/', 'TallyController@getAll');
    $router->get('/{tally}', 'TallyController@getOne');
});

// Weapons
$router->group(['prefix' => 'weapons'], function () use ($router) {
    $router->get('/', 'WeaponController@getAll');
    $router->get('/{weapon}', 'WeaponController@getOne');
});
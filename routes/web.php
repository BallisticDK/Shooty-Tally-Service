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
    $router->get('/[{/relations}]', 'UserController@getAll');
    $router->get('/{user}/[{/relations}]', 'UserController@getOne');
});

// Tallies
$router->group(['prefix' => 'tallies'], function () use ($router) {
    $router->get('/[{/relations}]', 'TallyController@getAll');
    $router->get('/{tally}/[{/relations}]', 'TallyController@getOne');
});

// Weapons
$router->group(['prefix' => 'weapons'], function () use ($router) {
    $router->get('/[{/relations}]', 'WeaponController@getAll');
    $router->get('/{weapon}/[{/relations}]', 'WeaponController@getOne');
});
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
    $router->group(['prefix' => '{user}'], function () use ($router) {
        $router->get('{user}', 'UserController@getOne');
        $router->get('/relations/{relations}', 'UserController@getOne');
    });
});
// Tallies
$router->group(['prefix' => 'tallies'], function () use ($router) {
    $router->get('/', 'TallyController@getAll');
    $router->get('/relations/{relations}', 'TallyController@getAll');
    
    $router->group(['prefix' => '{tally}'], function () use ($router) {
        $router->get('{tally}', 'TallyController@getOne');
        $router->get('/relations/{relations}', 'TallyController@getOne');
    });
});
// Weapons
$router->group(['prefix' => 'weapons'], function () use ($router) {
    $router->get('/', 'WeaponController@getAll');
    $router->group(['prefix' => '{weapon}'], function () use ($router) {
        $router->get('{weapon}', 'WeaponController@getOne');
        $router->get('/relations/{relations}', 'WeaponController@getOne');
    });
});
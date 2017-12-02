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

// API routes
$router->get('/api/members', 'MembersAPIController@list');
$router->post('/api/members', 'MembersAPIController@create');
$router->put('/api/members/{id}', 'MembersAPIController@update');
$router->delete('/api/members/{id}', 'MembersAPIController@delete');

// View (App) routes
$router->get('/members', 'MembersAppController@list');
$router->get('/members/create', 'MembersAppController@create');
$router->get('/members/{id}/edit', 'MembersAppController@edit');

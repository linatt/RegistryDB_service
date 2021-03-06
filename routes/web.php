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

$router->group(['prefix' => 'api'], function () use ($router) {

  $router->get('services',  ['uses' => 'ServiceController@showAllServices']);

  $router->get('services/{Service_Id}', ['uses' => 'ServiceController@showOneService']);

  $router->post('services', ['uses' => 'ServiceController@create']);

  $router->delete('services/{$Service_Id}', ['uses' => 'ServiceController@delete']);

  $router->put('services/{Service_Name}', ['uses' => 'ServiceController@update']);

});

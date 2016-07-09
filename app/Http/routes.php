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

/*
|--------------------------------------------------------------------------
| Material Routes
|--------------------------------------------------------------------------
*/
$app->group(['prefix' => 'material', 'namespace' => 'App\Http\Controllers'], function () use ($app) {
    $app->get('/', 'MaterialController@index');
    $app->post('/', 'MaterialController@create');
    $app->get('/{material}', 'MaterialController@show');
    $app->delete('/{material}', 'MaterialController@destroy');
    $app->patch('/{material}', 'MaterialController@update');
});

/*
|--------------------------------------------------------------------------
| Slice Routes
|--------------------------------------------------------------------------
*/
$app->group(['prefix' => 'material/{material}/slice', 'namespace' => 'App\Http\Controllers'], function () use ($app) {
    $app->get('/', 'SliceController@index');
    $app->post('/', 'SliceController@create');
    $app->get('/{slice}', 'SliceController@show');
    $app->delete('/{slice}', 'SliceController@destroy');
    $app->patch('/{slice}', 'SliceController@update');
});

/*
|--------------------------------------------------------------------------
| Tag Routes
|--------------------------------------------------------------------------
*/
$app->group(['prefix' => 'tag', 'namespace' => 'App\Http\Controllers'], function () use ($app) {
    $app->get('/', 'TagController@index');
    $app->post('/', 'TagController@create');
    $app->get('/{tag}', 'TagController@show');
    $app->delete('/{tag}', 'TagController@destroy');
    $app->patch('/{tag}', 'TagController@update');
});

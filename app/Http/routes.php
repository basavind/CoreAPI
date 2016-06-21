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

$app->get('material', 'MaterialController@index');
$app->post('material', 'MaterialController@create');
$app->get('material/{material}', 'MaterialController@show');
$app->delete('material/{material}', 'MaterialController@destroy');
$app->patch('material/{material}', 'MaterialController@update');

$app->group(['prefix' => 'material/{material}', 'namespace' => 'App\Http\Controllers'], function () use ($app) {
    $app->get('slice', 'SliceController@index');
    $app->post('slice', 'SliceController@create');
    $app->get('slice/{slice_id}', 'SliceController@show');
    $app->delete('slice/{slice}', 'SliceController@destroy');
    $app->patch('slice/{slice}', 'SliceController@update');

    $app->get('tag', 'TagController@index');
    $app->post('tag', 'TagController@create');
    $app->get('tag/{tag_id}', 'TagController@show');
    $app->patch('tag/{tag_id}', 'TagController@update');
    $app->delete('tag/{tag_id}', 'TagController@detach');

});

$app->get('tag', 'TagController@list_tag');
//$app->post('tag', 'TagController@create');
$app->patch('tag/{tag_id}', 'TagController@update');
$app->delete('tag/{tag_id}', 'TagController@destroy');

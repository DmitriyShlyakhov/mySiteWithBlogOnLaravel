<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('myindex');
});

Route::get('pro-mobile', function () {
    return view('pro-mobile');
});

Route::get('i-shop', function () {
    return view('i-shop');
});

Route::get('nat-geo', function () {
    return view('nat-geo');
});

/*Route::get('blog', ['as' => 'blog', 'uses' => 'BlogController@index']);
Route::post('blog/{slug}', 'BlogController@cart');
Route::get('blog/{slug}', 'MessageController@addToDBAjax');*/

Route::group(['prefix' => 'blog'], function (){
    Route::get('/', 'BlogController@index');
    Route::get('/{slug}', 'BlogController@cart');
    Route::post('/{slug}', 'BlogController@addToDBAjax');
});

Route::get('message', 'MessageController@getFromDB');
Route::post('message', 'MessageController@addToDBAjax');

Route::auth();

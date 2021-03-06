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
    return view('home');
});

Route::get('item/{type}', 'ItemsController@show');
//Route::get('item/create', 'ItemsController@create');
//Route::get('item/top-story', 'ItemsController@topStory');
//Route::get('item/feature', 'ItemsController@feature');
//Route::get('item/brief', 'ItemsController@brief');
//Route::get('item/section-title', 'ItemsController@sectionTitle');
//Route::get('item/quote', 'ItemsController@quote');
//Route::get('item/date', 'ItemsController@date');

Route::get('form', 'FormsController@show');

Route::get('render/{type}', 'RendersController@show');

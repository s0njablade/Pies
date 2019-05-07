<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/pies', 'PagesController@pies');
Route::get('fruitPies', 'PagesController@fruitPies');
Route::get('creamPies', 'PagesController@creamPies');
Route::get('custardPies', 'PagesController@custardPies');

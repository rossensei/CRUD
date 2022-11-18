<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'SiteController@index');

Route::get('/stores', 'StoreController@index');
Route::post('/stores', 'StoreController@store');
Route::get('/stores/create', 'StoreController@create');


Route::get('/stores/{store}', 'StoreController@edit');
Route::put('/edit/{store}', 'StoreController@update');
Route::delete('/stores/{store}', 'StoreController@delete');

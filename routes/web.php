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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['as'=>'webhooks', 'uses'=>'WebhooksController@index']);
Route::any('webhooks', 'WebhooksController@handler');
Route::get('amoapi', 'AmoapisController@index');
Route::post('amoapi', ['as'=>'amoapi.handler', 'uses'=>'AmoapisController@handler']);
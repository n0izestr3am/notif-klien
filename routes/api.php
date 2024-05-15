<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group([
    'middleware' => 'api',
    'namespace' => 'n0izestr3am\notifklien\Controller',
    'prefix' => 'notif'
], function ($router) {
   Route::get('/api', 'NotifKlienController@apiChek');
   Route::post('/update/{id}', 'NotifKlienController@update')->name('notifklien.update');

});


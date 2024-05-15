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


Route::prefix('notif')->namespace('n0izestr3am\notifklien\Controller')
      ->middleware('web')->group(function()
     {
	  Route::get('/client', 'NotifKlienController@getClient')->name('NotifKlienController.client');
	  Route::get('/check', 'NotifKlienController@check')->name('notifklien.check');
	  Route::post('/save', 'NotifKlienController@save')->name('notifklien.save');

    }

);
<?php

use Themosis\Facades\Route;

Route::group(['middleware' => 'auth'], function(){
    Route::get('store', 'StoreController@index');
});

Route::get('login', 'LoginController@index');
Route::get('home', 'HomeController@index');

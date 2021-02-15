<?php

use Illuminate\Support\Facades\Route;


Route::view('/test', 'layouts.frontend');

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@home')->name('site.home');
});

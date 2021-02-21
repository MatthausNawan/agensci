<?php

use Illuminate\Support\Facades\Route;


Route::view('/test', 'layouts.frontend');

Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', 'HomeController@home')->name('site.home');

    Route::get('/professores', 'HomeController@showTeachersPage')->name('site.teachers');

    Route::get('/estudantes', 'HomeController@showStudentsPage')->name('site.students');

    Route::get('/empresas', 'HomeController@showCompaniesPage')->name('site.companies');
    Route::post('/newCompany', 'CompanyController@store')->name('site.companies.store');

    Route::get('/anuncia', 'HomeController@showAdvertisePage')->name('site.advertise');
});

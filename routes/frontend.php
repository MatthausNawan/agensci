<?php

use Illuminate\Support\Facades\Route;


Route::redirect('/', 'layouts.frontend');

Route::group(['namespace' => 'Frontend', 'middleware' => ['web']], function () {
    #home
    Route::get('/', 'HomeController@home')->name('site.home');
    Route::get('/professores', 'HomeController@showTeachersPage')->name('site.teachers');
    Route::get('/estudantes', 'HomeController@showStudentsPage')->name('site.students');
    Route::get('/anuncie', 'HomeController@showAdvertisePage')->name('site.advertise');


    #professor
    Route::get('/cadastro/professor', 'TeacherController@showRegisterTeacherPage')->name('site.teachers.register');

    #estudantes
    Route::get('/cadastro/estudante', 'StudentController@showRegisterStudentPage')->name('site.students.register');
    Route::post('/cadastro/estudante', 'StudentController@store')->name('site.students.register');

    #empresas
    Route::get('/cadastro/empresas', 'CompanyController@showRegisterCompaniesPage')->name('site.companies.register');
    Route::post('/cadastro/empresas', 'CompanyController@store')->name('site.companies.store');

    #anuncie

    #static
    Route::view('/obrigado', 'frontend.pages.static.register-success')->name('site.static.success-register');
});

Route::group(['prefix' => 'painel', 'namespace' => 'Frontend'], function () {

    #rotas restritas estudantes
    Route::group(['prefix' => 'estudante'], function () {
        Route::get('/', 'StudentController@home');
    });

    #rotas restritas empresas
    Route::group(['prefix' => 'empresa'], function () {
        Route::get('/', 'CompanyController@home');
    });

    #rotas restritas professor
    Route::group(['prefix' => 'professor'], function () {
        Route::get('/', 'TeacherController@home');
    });
});

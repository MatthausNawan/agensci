<?php

use Illuminate\Support\Facades\Route;


Route::redirect('/', 'layouts.frontend');

Route::group(['namespace' => 'Frontend', 'middleware' => ['web']], function () {
    #home
    Route::get('/', 'HomeController@home')->name('site.home');

    #professor
    Route::get('/professores', 'HomeController@showTeachersPage')->name('site.teachers');
    Route::get('/cadastro/professor', 'HomeController@registerTeacherPage')->name('site.teachers.register');

    #estudantes
    Route::get('/estudantes', 'HomeController@showStudentsPage')->name('site.students');
    Route::get('/cadastro/estudante', 'HomeController@registerStudentPage')->name('site.students.register');
    Route::post('/estudante', 'StudentController@store')->name('site.students.register.form');

    #empresas
    Route::get('/cadastro/empresas', 'HomeController@showCompaniesPage')->name('site.companies');
    Route::post('/empresas', 'CompanyController@store')->name('site.companies.store');

    #anuncie
    Route::get('/anuncie', 'HomeController@showAdvertisePage')->name('site.advertise');
});

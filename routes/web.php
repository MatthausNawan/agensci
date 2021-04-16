<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::redirect('/', '/login');

Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');
Auth::routes();


Route::redirect('/', 'layouts.frontend');

Route::group(['namespace' => 'Frontend', 'middleware' => ['web']], function () {
    #home
    Route::get('/', 'HomeController@home')->name('site.home');
    Route::get('/professores', 'HomeController@showTeachersPage')->name('site.teachers');
    Route::get('/estudantes', 'HomeController@showStudentsPage')->name('site.students');
    Route::get('/empresas', 'HomeController@showCompaniesPage')->name('site.companies');
    Route::get('/anuncie', 'HomeController@showAdvertisePage')->name('site.advertise');

    Route::get('/noticia/{slug}','HomeController@showPost')->name('site.post');

    Route::get('/pesquisar/categoria/{category}','HomeController@searchLink')->name('site.search-links');

    #statics
    Route::view('/obrigado', 'frontend.pages.static.register-success')->name('site.static.success-register');
});

Route::group(['prefix' => 'cadastro', 'namespace' => 'Painel'], function () {
    #professor
    Route::get('professor', 'Teachers\TeacherController@showRegisterTeacherPage')->name('site.teachers.register');
    Route::post('professor', 'Teachers\TeacherController@store')->name('site.teacher.register.form');

    #estudantes
    Route::get('estudante', 'Students\StudentController@showRegisterStudentPage')->name('site.students.register');
    Route::post('estudante', 'Students\StudentController@store')->name('site.students.register');

    #empresas
    Route::get('empresas', 'Companies\CompanyController@showRegisterCompaniesPage')->name('site.companies.register');
    Route::post('empresas', 'Companies\CompanyController@store')->name('site.companies.store');
});



Route::group(['prefix' => 'painel', 'middleware' => 'auth'], function () {

    #rotas restritas estudantes
    Route::group(['prefix' => 'estudante', 'as' => 'students.', 'namespace' => 'Painel\Students'], function () {
        Route::get('/', 'StudentController@home')->name('home');
        Route::get('/minha-conta', 'StudentController@getProfile')->name('profile');
        Route::put('/minha-conta', 'StudentController@updateProfile')->name('profile.update');

        Route::resource('meus-links', 'PersonalLinkController');
        Route::resource('student-profiles', 'StudentProfileController');
        Route::post('students/media', 'PersonalLinkController@storeMedia')->name('storeMedia');
    });

    #rotas restritas empresas
    Route::group(['prefix' => 'empresa', 'as' => 'companies.', 'namespace' => 'Painel\Companies'], function () {
        Route::get('/', 'CompanyController@home')->name('home');
        Route::get('/minha-conta', 'CompanyController@getProfile')->name('profile');
        Route::put('/minha-conta', 'CompanyController@updateProfile')->name('profile.update');
        Route::resource('jobs', 'JobController');
        Route::resource('personal-links', 'PersonalLinkController');

        Route::post('companies/media', 'PersonalLinkController@storeMedia')->name('storeMedia');
    });

    #rotas restritas professor
    Route::group(['prefix' => 'professor', 'as' => 'teachers.', 'namespace' => 'Painel\Teachers'], function () {
        Route::get('/', 'TeacherController@home')->name('home');
        Route::get('/minha-conta', 'TeacherController@getProfile')->name('profile');
        Route::put('/minha-conta', 'TeacherController@updateProfile')->name('profile.update');

        Route::resource('speakers', 'SpeakerController');
        Route::resource('posts', 'PostController');
        Route::resource('events', 'EventController');
        Route::resource('personal-links', 'PersonalLinkController');

        Route::post('teachers/ckmedia', 'PostController@storeCKEditorImages')->name('teachers.storeCKEditorImages');
        Route::post('teachers/media', 'PersonalLinkController@storeMedia')->name('storeMedia');
    });
});


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Segments
    Route::delete('segments/destroy', 'SegmentController@massDestroy')->name('segments.massDestroy');
    Route::resource('segments', 'SegmentController');

    // Categories
    Route::delete('categories/destroy', 'CategoryController@massDestroy')->name('categories.massDestroy');
    Route::resource('categories', 'CategoryController');

    // Countries
    Route::delete('countries/destroy', 'CountriesController@massDestroy')->name('countries.massDestroy');
    Route::resource('countries', 'CountriesController');

    // Events
    Route::delete('events/destroy', 'EventController@massDestroy')->name('events.massDestroy');
    Route::post('events/media', 'EventController@storeMedia')->name('events.storeMedia');
    Route::post('events/ckmedia', 'EventController@storeCKEditorImages')->name('events.storeCKEditorImages');
    Route::resource('events', 'EventController');

    // Headlines
    Route::delete('headlines/destroy', 'HeadlineController@massDestroy')->name('headlines.massDestroy');
    Route::post('headlines/media', 'HeadlineController@storeMedia')->name('headlines.storeMedia');
    Route::post('headlines/ckmedia', 'HeadlineController@storeCKEditorImages')->name('headlines.storeCKEditorImages');
    Route::resource('headlines', 'HeadlineController');

    // Companies
    Route::delete('companies/destroy', 'CompanyController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompanyController@storeMedia')->name('companies.storeMedia');
    Route::post('companies/ckmedia', 'CompanyController@storeCKEditorImages')->name('companies.storeCKEditorImages');
    Route::resource('companies', 'CompanyController');

    // External Liks
    Route::delete('external-liks/destroy', 'ExternalLiksController@massDestroy')->name('external-liks.massDestroy');
    Route::post('external-liks/media', 'ExternalLiksController@storeMedia')->name('external-liks.storeMedia');
    Route::post('external-liks/ckmedia', 'ExternalLiksController@storeCKEditorImages')->name('external-liks.storeCKEditorImages');
    Route::resource('external-liks', 'ExternalLiksController');

    // Posts
    Route::delete('posts/destroy', 'PostController@massDestroy')->name('posts.massDestroy');
    Route::post('posts/media', 'PostController@storeMedia')->name('posts.storeMedia');
    Route::post('posts/ckmedia', 'PostController@storeCKEditorImages')->name('posts.storeCKEditorImages');
    Route::resource('posts', 'PostController');

    // Speakers
    Route::delete('speakers/destroy', 'SpeakerController@massDestroy')->name('speakers.massDestroy');
    Route::post('speakers/media', 'SpeakerController@storeMedia')->name('speakers.storeMedia');
    Route::post('speakers/ckmedia', 'SpeakerController@storeCKEditorImages')->name('speakers.storeCKEditorImages');
    Route::resource('speakers', 'SpeakerController');

    // Promotions
    Route::delete('promotions/destroy', 'PromotionController@massDestroy')->name('promotions.massDestroy');
    Route::resource('promotions', 'PromotionController');

    // Student Profiles
    Route::delete('student-profiles/destroy', 'StudentProfileController@massDestroy')->name('student-profiles.massDestroy');
    Route::post('student-profiles/media', 'StudentProfileController@storeMedia')->name('student-profiles.storeMedia');
    Route::post('student-profiles/ckmedia', 'StudentProfileController@storeCKEditorImages')->name('student-profiles.storeCKEditorImages');
    Route::resource('student-profiles', 'StudentProfileController');

    // Jobs
    Route::delete('jobs/destroy', 'JobController@massDestroy')->name('jobs.massDestroy');
    Route::resource('jobs', 'JobController');

    // Contests
    Route::delete('contests/destroy', 'ContestController@massDestroy')->name('contests.massDestroy');
    Route::resource('contests', 'ContestController');
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});

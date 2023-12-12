<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Web routes
Route::group(['namespace' => 'web'], function () {
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('/about-us', 'PagesController@aboutUs')->name('about');
    Route::get('/how-it-works', 'PagesController@howitWorks')->name('work');
    Route::get('/contact-us', 'PagesController@contactUs')->name('contactUs');
    Route::get('/request-resolution-consultancy', 'PagesController@reqResolution')->name('request.resolution');
    Route::get('/faqs', 'PagesController@faqs')->name('faqs');
});

Auth::routes();
Route::get('/member-signup', 'Auth\LoginController@memberSignUp')->name('member_signup');
Route::get('/initiator-signup', 'Auth\LoginController@initiatorSignUp')->name('initiator_signup');
Route::get('/consultant-signup', 'Auth\LoginController@consultantSignUp')->name('consultant_signup');
Route::post('/initiator-register', 'Auth\RegisterController@initiatorRegister')->name('initiator_register');
Route::post('/consultant-register', 'Auth\RegisterController@consultantRegister')->name('consultant_register');
Route::post('/login-user', 'Auth\LoginController@login')->name('login_user');
Route::get('/dashboard', 'Initiator\InitiatorController@dashboard')->name('initiator.dashboard')->middleware('role');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['role:initiator']], function () {
    // Initiator Routes
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['role:admin']], function () {
        // Admin Routes
        Route::get('/dashboard', 'AdminController@dashboard');
    });

    Route::group(['prefix' => 'initiator', 'as' => 'initiator.', 'namespace' => 'Initiator', 'middleware' => ['role:initiator']], function () {
        // Initiator Routes
        Route::get('/dashboard', 'InitiatorController@dashboard')->name('dashboard');
    });

    Route::group(['prefix' => 'consultant', 'as' => 'consultant.', 'namespace' => 'Consultant', 'middleware' => ['role:consultant']], function () {
        // Consultant Routes
        Route::get('/dashboard', 'ConsultantController@dashboard');
    });
});

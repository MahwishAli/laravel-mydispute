<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Web routes
Route::group(['namespace' => 'web'], function () {
    Route::get('/', 'PagesController@index')->name('home');
    Route::get('/about-us', 'PagesController@aboutUs')->name('about');
    Route::get('/how-it-works', 'PagesController@howitWorks')->name('work');
    Route::get('/request-resolution-consultancy', 'PagesController@reqResolution')->name('request.resolution');
    Route::get('/faqs', 'PagesController@faqs')->name('faqs');

});

Auth::routes();
Route::get('/member-signup', 'Auth\LoginController@memberSignUp')->name('member_signup');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', 'DashboardController@dashboard')->name('dashboard');

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['role:admin']], function () {
        // Admin Routes
        Route::get('/dashboard', 'AdminController@dashboard')->name('dashboard');
    });

    Route::group(['prefix' => 'initiator', 'as' => 'initiator.', 'namespace' => 'Initiator', 'middleware' => ['role:initiator']], function () {
        // Initiator Routes
        Route::get('/dashboard', 'InitiatorController@dashboard');
    });

    Route::group(['prefix' => 'consultant', 'as' => 'consultant.', 'namespace' => 'Consultant', 'middleware' => ['role:consultant']], function () {
        // Consultant Routes
        Route::get('/dashboard', 'ConsultantController@dashboard');
    });
});

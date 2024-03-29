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
    Route::post('dispute-form', 'RequestDisputeController@disputeForm')->name('dispute_form');
});

Route::get('/login', 'Auth\LoginController@login')->name('login')->middleware('guest');
Route::get('/member-signup', 'Auth\LoginController@memberSignUp')->name('member_signup');
Route::get('/initiator-signup', 'Auth\LoginController@initiatorSignUp')->name('initiator_signup');
Route::get('/consultant-signup', 'Auth\LoginController@consultantSignUp')->name('consultant_signup');
Route::post('/initiator-register', 'Auth\RegisterController@initiatorRegister')->name('initiator_register');
Route::post('/consultant-register', 'Auth\RegisterController@consultantRegister')->name('consultant_register');
Route::post('/login-user', 'Auth\LoginController@loginUser')->name('login_user');

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'initiator', 'middleware' => ['role:initiator']], function () {
    // Initiator Routes
    Route::get('/home', 'Initiator\InitiatorController@dashboard')->name('initiator.home');
    Route::get('/profile', 'Initiator\InitiatorController@profile')->name('initiator.profile');
    Route::post('/change-password', 'Initiator\InitiatorController@changePassword')->name('initiator.changePassword');
    Route::post('/profile-delete', 'Initiator\InitiatorController@profileDelete')->name('initiator.profileDelete');
    Route::post('/privacy-detail', 'Initiator\InitiatorController@privacyDetails')->name('initiator.privacyDetails');
    Route::get('/free-services', 'Initiator\InitiatorController@freeServices')->name('initiator.freeServices');
    Route::post('/guidance', 'Initiator\InitiatorController@guidance')->name('initiator.guidance');
    Route::post('/feedback', 'Initiator\InitiatorController@feedback')->name('initiator.feedback');
    Route::get('/paid-services', 'Initiator\InitiatorController@paidServices')->name('initiator.paidServices');
    Route::get('/draft-services', 'Initiator\InitiatorController@draftServices')->name('initiator.draftServices');
    Route::get('/store-draft-services/{id}', 'Initiator\InitiatorController@storedraftServices')->name('initiator.storedraftServices');
    Route::get('/requirements', 'Initiator\InitiatorController@requirements')->name('initiator.requirements');
    Route::get('/shortlisted-consultants', 'Initiator\InitiatorController@shortlistedCon')->name('initiator.shortlistedCon');
    Route::get('/consultant-applications', 'Initiator\InitiatorController@consultantApp')->name('initiator.consultantApp');
    Route::get('/reviews', 'Initiator\InitiatorController@reviews')->name('initiator.reviews');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

Route::group(['prefix' => 'consultant',  'middleware' => ['role:consultant']], function () {
    // consultant Routes
    Route::get('/home', 'Consultant\ConsultantController@dashboard')->name('consultant.home');
    Route::get('/profile', 'Consultant\ConsultantController@profile')->name('consultant.profile');
    Route::post('/change-password', 'Consultant\ConsultantController@changePassword')->name('consultant.changePassword');
    Route::post('/profile-delete', 'Consultant\ConsultantController@profileDelete')->name('consultant.profileDelete');
    Route::post('/privacy-detail', 'Consultant\ConsultantController@privacyDetails')->name('consultant.privacyDetails');
    Route::get('/view-details/{id}', 'Consultant\ConsultantController@viewDetails')->name('consultant.viewDetails');
    Route::get('/apply-jobs/{id}', 'Consultant\ConsultantController@applyJobs')->name('consultant.applyJobs');
    Route::get('/delete-jobs/{id}', 'Consultant\ConsultantController@deleteJobs')->name('consultant.deleteJob');
    Route::get('/available-jobs', 'Consultant\ConsultantController@availableJobs')->name('consultant.availjobs');
    Route::get('/jobs-applied', 'Consultant\ConsultantController@jobsApplied')->name('consultant.jobsApp');
    Route::get('/save-jobs/{id}', 'Consultant\ConsultantController@saveJobs')->name('consultant.saveJobs');
    Route::get('/shortlisted-jobs', 'Consultant\ConsultantController@shortJobs')->name('consultant.jobsShortlisted');
    Route::get('/messages', 'Consultant\ConsultantController@messages')->name('consultant.messages');
    Route::post('/send-messages', 'Consultant\ConsultantController@sendMessages')->name('consultant.sendMessages');
    Route::get('/reviews', 'Consultant\ConsultantController@reviews')->name('consultant.reviews');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
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

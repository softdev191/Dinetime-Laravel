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

Route::get('/', 'admin\AdminHomeController@showHome');
Route::get('home', 'admin\AdminHomeController@showHome')->name('home');
Route::get('login', 'admin\AdminHomeController@showLogin')->name('login');
Route::get('register', 'admin\AdminHomeController@showRegister')->name('register');
Route::post('dologin', 'admin\AdminHomeController@doLogin')->name('login.submit');
Route::post('doregister', 'admin\AdminHomeController@doRegister')->name('register.submit');
Route::get('forgotpassword', 'admin\AdminHomeController@showForgotPassword')->name('forgotpassword');
Route::post('sendemail', 'admin\AdminHomeController@sendForgotPasswordEmail')->name('request.frogotpwd');
Route::get('resetpassword/{token}', 'admin\AdminHomeController@showResetPassword');
Route::post('doresetpassword', 'admin\AdminHomeController@doResetPassword');
Route::get('logout', 'admin\AdminHomeController@logout')->name('logout');


Route::group(array('middleware' => 'CheckUser'), function () {
    
    Route::get('profile/{id}', 'admin\AdminHomeController@showProfile')->name('profile');
    Route::post('profile/changepassword', 'admin\AdminHomeController@changePassword')->name('changepassword');
    Route::post('profile/storeprofile', 'admin\AdminHomeController@storeProfile')->name('storeprofile');
    Route::get('user', 'admin\AdminHomeController@showUser')->name('user');
    Route::get('removeuser/{user_id}', 'admin\AdminHomeController@destroyUser')->name('removeuser');

    Route::get('deal', 'admin\DealReservationController@showDeal')->name('deal');
    Route::get('reservation', 'admin\DealReservationController@showReservation')->name('reservation');
    Route::get('removedeal/{deal_id}', 'admin\DealReservationController@destroyDeal')->name('removedeal');
    Route::get('removereservation/{reservation_id}', 'admin\DealReservationController@destroyReservation')->name('removereservation');

    Route::get('dashboard', 'admin\VenueController@showDashboard')->name('dashboard');
    Route::get('venue', 'admin\VenueController@showVenue')->name('venue');
    Route::get('venue/publishedvenues', 'admin\VenueController@showPublishedVenues')->name('publishedvenues');
    Route::get('venue/pendingvenues', 'admin\VenueController@showPendingVenues')->name('pendingvenues');
    Route::get('venue/rejectedvenues', 'admin\VenueController@showRejectedVenues')->name('rejectedvenues');
    Route::get('addvenue', 'admin\VenueController@addVenue')->name('addvenue');
    Route::post('storevenue', 'admin\VenueController@storeVenue')->name('storevenue');
    Route::post('removescreenshot', 'admin\VenueController@removeScreenshot')->name('removescreenshot');
    Route::get('editvenue/{venue_id}', 'admin\VenueController@editVenue')->name('editvenue');
    Route::get('removevenue/{venue_id}', 'admin\VenueController@destroyVenue')->name('removevenue');
    Route::post('venue/rejectvenue', 'admin\VenueController@rejectVenue')->name('rejectvenue');
    Route::post('venue/approvevenue', 'admin\VenueController@approveVenue')->name('approvevenue');
    Route::get('venue/venuedetail/{venue_id}', 'admin\VenueController@showVenueDetails')->name('venuedetail');

});

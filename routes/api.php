<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::post('login', 'API\AdminHomeController@login');
Route::post('forgotPassword', 'API\AdminHomeController@forgotPassword');
Route::post('testNotification', 'API\JobsController@testNotification');

Route::middleware('auth:api')->group(function () {
    //-------------- User --------------
    Route::get('userLogout', 'API\AdminHomeController@userLogout');
    Route::post('changeAccountSetting', 'API\AdminHomeController@changeAccountSetting');
    Route::post('changeMyProfile', 'API\AdminHomeController@changeMyProfile');
    Route::post('addAwsKey', 'API\AdminHomeController@addAwsKey');

    //-------------- Jobs --------------
    Route::post('getUserJobDetails', 'API\JobsController@getUserJobDetails');
    Route::post('changeJobStatus', 'API\JobsController@changeJobStatus');
    Route::post('getUserJobCheckList', 'API\JobsController@getUserJobCheckList');

    //-------------- Chat --------------
    Route::post('chatPost', 'API\AdminHomeController@chatPost');
    Route::post('getChatUser', 'API\AdminHomeController@getChatUser');
    Route::post('getChatHistory', 'API\AdminHomeController@getChatHistory');

    //---------------- Notes --------------
    Route::post('shownotes', 'API\NotesController@index');
});

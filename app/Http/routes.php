<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/world/{id}', function ($id) {
    return "Hello" . $id;
});
Route::get('foo/bar', function () {
    return "hello";
});

Route::any('foo', function () {
    return "hello world";
});
Route::get('user/profile', ['as' => 'profile', function () {
    return "jjjj";
}]);
Route::group(['as' => 'admin::'], function () {
    Route::get('dashboard', ['as' => 'dashboard', function () {
        // Route named "admin::dashboard"
        return "dashboard::";
    }]);
});
Route::group(['namespace' => 'Api', 'prefix' => 'api'], function () {

    Route::group(['namespace' => 'V1', 'prefix' => 'v1'], function () {

        Route::resource('coba', 'CobaController');
    });


});

Route::resource('guest', 'GuestController');



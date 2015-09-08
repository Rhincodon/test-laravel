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

Route::get('/', 'HomeController@index');

Route::get('mandrill-web-hook', 'MandrillWebHookController@saveHook');
Route::post('mandrill-web-hook', 'MandrillWebHookController@handleData');

Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function() {

    Route::get('login', 'AuthController@getLogin');
    Route::post('login', 'AuthController@postLogin');
    Route::get('register', 'AuthController@getRegister');
    Route::post('register', 'AuthController@postRegister');
    Route::get('logout', 'AuthController@getLogout');

});

Route::group(['prefix' => 'password', 'namespace' => 'Auth'], function() {

    Route::get('email', 'PasswordController@getEmail');
    Route::post('email', 'PasswordController@postEmail');
    Route::get('reset/{token}', 'PasswordController@getReset');
    Route::post('reset', 'PasswordController@postReset');

});

Route::group(['prefix' => 'admin', 'middleware' => 'root'], function() {
    Route::resource('user', 'UserController');
});

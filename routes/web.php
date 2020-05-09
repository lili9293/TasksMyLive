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

//ToDo: use verified middleware to allow access to routes
/**
 * Route::get('profile', function () {
 *    // Only verified users may enter...
 *   })->middleware('verified');
 */

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/verify?token={email_token}', 'Auth\VerificationController@verify');

Route::get('/home', 'HomeController@index')->name('home');

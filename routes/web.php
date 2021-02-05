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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', 'HomeController@welcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//It does not allow to redirect to homepage without login
Route::get('/homepage', 'HomeController@homepage')->name('homepage')->middleware('auth.basic');

//Side Menu Routes
Route::get('/photo', 'HomeController@photoPage')->name('photo');
Route::get('/video', 'HomeController@videoPage')->name('video');
Route::get('/settings', 'HomeController@settingsPage')->name('settings');
Route::get('/information', 'HomeController@infoPage')->name('information');

//Google Map
Route::get('/all', 'HomeController@get_all_points')->name('all');

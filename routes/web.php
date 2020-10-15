<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/','WelcomeController')->name('welcome');

Route::get('scrims','EventController@index')->name('scrims');


Route::middleware('auth')->get('scrims/create','EventController@create')->name('scrims.create');

Route::post('scrims/store','EventController@store')->name('scrims.store');

Route::post('squads/store','SquadController@store')->name('squads.store');

Route::middleware('auth')->get('scrims/{slug}','EventController@show')->name('scrims.show');

Route::get('users/create', 'UserController@create')->name('user.create');

Route::middleware('auth')->get('users/{slug}','UserController@show')->name('user.show');


Route::get('users','UserController@index')->name('my.scrims');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

//all listings
Route::get('/', 'App\Http\Controllers\ListingController@index');

//show create form
Route::get('/listings/create', 'App\Http\Controllers\ListingController@create')->middleware('auth');

//store listing data
Route::post('/listings', 'App\Http\Controllers\ListingController@store');

//show edit form
Route::get('/listings/{listing}/edit', 'App\Http\Controllers\ListingController@edit')->middleware('auth');

//submit edit form
Route::put('/listings/{listing}', 'App\Http\Controllers\ListingController@update')->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}', 'App\Http\Controllers\ListingController@destroy')->middleware('auth');

//manage listings
Route::get('/listings/manage', 'App\Http\Controllers\ListingController@manage')->middleware('auth');

//single listing
Route::get('/listings/{listing}', 'App\Http\Controllers\ListingController@show');

//show register/create form
Route::get('/register', 'App\Http\Controllers\UserController@create')->middleware('guest');

//store register data
Route::POST('/users', 'App\Http\Controllers\UserController@store');

//log user out
Route::POST('/logout', 'App\Http\Controllers\UserController@logout')->middleware('auth');

//show login form
Route::get('/login', 'App\Http\Controllers\UserController@login')->name('login')->middleware('guest');

//login user
Route::POST('/users/authenticate', 'App\Http\Controllers\UserController@authenticate');

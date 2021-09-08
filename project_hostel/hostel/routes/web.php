<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::post('/add', 'App\Http\Controllers\AddController@add')->name('add-form-hostel');

Route::get('/revision', 'App\Http\Controllers\AddController@revision')->name('revision-hostel');

Route::get('/revision/{id}/delete', 'App\Http\Controllers\AddController@delete')->name('delete-hostel');

Route::get('/search', 'App\Http\Controllers\AddController@search')->name('search-hostel');

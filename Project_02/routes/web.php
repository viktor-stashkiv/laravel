<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/posts','PostController@index')->name('post.index');
Route::get('/posts/create','PostController@create')->name('post.create');

Route::post('/posts/create','PostController@store')->name('post.store');
Route::get('/posts/{post}','PostController@show')->name('post.show');
Route::get('/posts/{post}/edit','PostController@edit')->name('post.edit');
Route::patch('/posts/{post}','PostController@update')->name('post.update');
Route::delete('/posts/{post}','PostController@destroy')->name('post.delete');

Route::get('/posts/first_or_create','PostController@firstOrCreate');
Route::get('/posts/update_or_create','PostController@UpdateOrCreate');
Route::get('/main','MainController@index')->name('main.index');
Route::get('/contacts','ContactsController@index')->name('contact.index');;
Route::get('/about','AboutController@index')->name('about.index');;

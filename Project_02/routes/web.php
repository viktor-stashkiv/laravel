<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('home');
Route::get('/main','MainController@index')->name('main.index');
Route::get('/contacts','ContactsController@index')->name('contact.index');
Route::get('/about','AboutController@index')->name('about.index');

Route::group(['namespace' => 'Post'],function (){
    Route::get('/posts','IndexController')->name('post.index');
    Route::get('/posts/create','CreateController')->name('post.create');
    Route::post('/posts','StoreController')->name('post.store');
    Route::get('/posts/{post}','ShowController')->name('post.show');
    Route::get('/posts/{post}/edit','EditController')->name('post.edit');
    Route::patch('/posts/{post}','UpdateController')->name('post.update');
    Route::delete('/posts/{post}','DestroyController')->name('post.delete');
});

Route::group(['namespace' => 'Admin','prefix' => 'admin', 'middleware' => 'admin'],function (){
    Route::group(['namespace' => 'Post'],function (){
        Route::get('/posts','IndexController')->name('admin.post.index');
    });
});

Auth::routes();

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
    return view('welcome');
});

Auth::routes();
Route::resource('Stats','StatsController');
Route::get('/home/{user}', 'ProfileController@index')->name('home');

// Route::get('/post', 'PostController@index')->name('post.show');
// Route::get('/post/create', 'PostController@index')->name('post.create');
// Route::post('/post', 'PostController@index')->name('post.store');
// Route::put('/post/{post}', 'PostController@index')->name('post.show');
// Route::delete('/post/{post}', 'PostController@index')->name('post.show');


Route::get('/profile', 'ProfileController@index')->name('profile.index');
Route::get('/profile/create', 'ProfileController@create')->name('profile.create');
Route::get('/profile/{user}', 'ProfileController@show')->name('profile.show');
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('profile.edit');
Route::post('/profile', 'ProfileController@store')->name('profile.store');
Route::put('/profile/{user}', 'ProfileController@update')->name('profile.update');
Route::delete('/profile/{user}', 'ProfileController@destroy')->name('profile.destroy');



// Route::get('/photo', 'PhotoController@index')->name('photo.index');
// Route::get('/photo/create', 'PhotoController@create')->name('photo.create');
// Route::get('/photo/{photo}', 'PhotoController@show')->name('photo.show');
// Route::get('/photo/{photo}/edit', 'PhotoController@edit')->name('photo.edit');
// Route::post('/photo', 'PhotoController@store')->name('photo.store');
// Route::put('/photo/{photo}', 'PhotoController@update')->name('photo.update');
// Route::delete('/photo/{photo}', 'PhotoController@destroy')->name('photo.destroy');






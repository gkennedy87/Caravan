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

Route::get('/', function () {
    return view('index');
});
Auth::routes();

//Admin Routes
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tasks','HomeController@tasks')->name('tasks');
Route::get('/home/posts/create','HomeController@create')->name('create');
Route::get('/home/posts/index','HomeController@pIndex')->name('pIndex');


//Contacts Routes
Route::get('/contacts', 'HomeController@contacts')->name('contacts');
// Route::get('/contacts','ContactController@index');
// Route::post('/contacts','ContactController@store');
Route::resource('contacts','ContactController');

//Posts Routes
Route::get('/blog', 'PostController@index')->name('blog');
Route::resource('posts','PostController');

//Task Routes
Route::get('/tasks','TaskController@index');

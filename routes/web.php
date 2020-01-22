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

// Route for the homepage
Route::get('/', 'BlogController@display')->name( 'index' );

// Route for the blog detail page
Route::get( '/post/{slug}', 'BlogController@displayPost' )->name( 'blog.single' );

Route::get('/blog-submit', function () {
    return view('blog-submit');
})->name('blog.submit');

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return view('welcome');
})->name( 'logout' );


Route::get('/home', 'HomeController@index')->name('home');

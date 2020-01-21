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

Route::get( '/', function () {
    return view( 'welcome' );
} )->name( 'index' );

Auth::routes();

Route::get( '/home', 'HomeController@index' )->name( 'home' );

// Example routes

// Naming routes based on actions they perform
Route::get( '/post', 'BlogController@index' )->name( 'post.display' );
Route::get( '/post-edit', 'BlogController@edit' )->name( 'post.edit' );

// Its possible to group your routes as well
Route::group( [
    'prefix'     => 'administrator',
    'middleware' => [ 'auth', 'admin.access' ],
], function () {

    // Routes For Adding a Post
    Route::get( '/add-post', 'BlogController@indexPost' )->name( 'post.add' );

} );

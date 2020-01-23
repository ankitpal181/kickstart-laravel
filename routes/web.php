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
Route::get( '/', 'BlogController@display' )->name( 'index' );

// Route for the blog detail page
Route::get( '/post/{slug}', 'BlogController@displayPost' )->name( 'blog.single' );


// Routes only for logged in Users
Route::group( [
    'middleware' => [ 'auth' ],
], function () {

    //Route to display the blog submit form
    Route::get( '/blog-submit', function () {
        return view( 'blog-submit' );
    } )->name( 'blog.submit' );

    // Route to submit the bog submit form
    Route::post( '/blog-submit', 'BlogController@createPost' )->name( 'blog.create' );

} );

Auth::routes();

Route::get( '/logout', function () {
    Auth::logout();

    return redirect( '/' );
} )->name( 'logout' );


Route::get( '/home', 'HomeController@index' )->name( 'home' );

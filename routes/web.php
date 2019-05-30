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
    return view('welcome');
});
Route::group(['middleware' => ['auth']], function () {
Route::namespace('BackEnd')->prefix('admin')->group(function() {

    Route::get('/', 'Home@home')->name('admin.home');

        Route::resource('Users', 'Users')->except(['show']);

    if (Gate::allows('categories', \Illuminate\Support\Facades\Auth::user())) {

        Route::resource('Categories', 'Categories')->except(['show']);
    }
    if (Gate::allows('trips', \Illuminate\Support\Facades\Auth::user())) {
        Route::resource('Trips', 'Trips')->except(['show']);
    }

    Route::resource('Hotels', 'Hotels')->except(['show']);




});
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

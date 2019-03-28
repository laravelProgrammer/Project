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

// Home page Route

Route::get('/', function () {
    return view('welcome');
})->name('/');


// Contact Page Route 


Route::get('/contact', function () {
    return view('website.contact');
})->name('contact');

// About Page Route 

Route::get('/about', function () {
    return view('website.about');
})->name('about');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

   // Send Card Controller 

Route::resource('/sendCard','website\CardController');

  // User Profile Controller 

Route::resource('/profile','website\UserController');


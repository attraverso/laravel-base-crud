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

// Route:: method ( 'view url', function() {return view('view name')})
Route::get('/', function () {
  return view('homepage');
})->name('home');

// ::resource builds all the CRUD routes all by itself
//Route::resource('url', 'Controller that manages these routes') -> the controller manages all the routes with that url
Route::resource('students', 'StudentController');
Route::get('students/{student}/delete', 'StudentController@deletepreview')->name('students.deletepreview');
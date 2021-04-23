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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/result', function () {
    return view('result');
})->name('result')->middleware('auth');

Route::get('/schedules', function () {
    return view('schedules');
})->name('schedules')->middleware('auth');

Route::get('/contact', function () {
    return view('contact');
})->name('contact')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('book/field', FieldController::class)->except('edit','update')->middleware('auth');

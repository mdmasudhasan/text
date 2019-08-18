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
    return view('wel');
})->name('welcome');


Route::get('/laraschool','laraschoolcontroller@index')->name('laraschool');

Route::get('/About','laraschoolcontroller@about')->name('about');

Route::get('/Teacher','laraschoolcontroller@teacher')->name('teacher');

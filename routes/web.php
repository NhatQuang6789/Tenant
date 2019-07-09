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


Auth::routes();
Route::get("/login", "main_controller@login")->name("_login");
Route::post("/logout", "main_controller@logout");
Route::post("/post_login", "main_controller@post_login");
Route::get('/all', 'HomeController@all')->name('home');
Route::get('/', 'HomeController@index');



Route::post("/post_status", "main_controller@post_status");


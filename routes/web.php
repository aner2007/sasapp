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
Route::get('/admin',[App\Http\Controllers\AdminController::class,'index']);
Route::get('/admin2',[App\Http\Controllers\AdminController::class,'index2']);
Route::get('/admin3',[App\Http\Controllers\AdminController::class,'index3']);
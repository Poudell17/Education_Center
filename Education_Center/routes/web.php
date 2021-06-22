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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', function () {
    return view('layout.app');
});


Route::get('/dashboard', function () {
    return view('dashboard.layout');
});
Route::get('/dashboard/teacher', function () {
    return view('dashboard.teacher.teacher');
});

Route::get('dashboard/teacher/add', function () {
    return view('dashboard.teacher.create');
});
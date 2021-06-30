<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\TeacherController;

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

//--------------- Dashboard --------------
Route::get('/dashboard', function () {
    return view('dashboard.layout');
});

//-------------Dashboard Teacher--------------
Route::get('/dashboard/teacher', [TeacherController::class, 'index'])->name('Teachers');
Route::get('/dashboard/teacher/add', [TeacherController::class, 'create'])->name('Add Teachers');
Route::post('/dashboard/teacher/store', [TeacherController::class, 'store']);


//----------------------Dashboard Courses-------------------
Route::get('/dashboard/courses', function () {
    return view('dashboard.courses.courses');
});

Route::get('dashboard/course/add', function () {
    return view('dashboard.courses.create');
});
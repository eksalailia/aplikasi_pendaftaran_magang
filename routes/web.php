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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('layouts.main');
Route::get('/about', [\App\Http\Controllers\UserController::class, 'about'])->name('layouts.about');
Route::get('/service', [\App\Http\Controllers\UserController::class, 'service'])->name('layouts.service');
Route::get('/contact', [\App\Http\Controllers\UserController::class, 'contact'])->name('layouts.contact');
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin.main');

Auth::routes();

Route::get('/User', [App\Http\Controllers\HomeController::class, 'index'])->name('User');


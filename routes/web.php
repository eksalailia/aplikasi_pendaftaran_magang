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
route::get('/registrasi',[\App\Http\Controllers\RegisterController::class,'registrasi'])->name('registrasi');
route::post('/registerUser',[\App\Http\Controllers\RegisterController::class,'registerUser'])->name('registerUser');
Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('layouts.frontend.index');
Route::get('/about', [\App\Http\Controllers\UserController::class, 'about'])->name('layouts.frontend.about');
Route::get('/service', [\App\Http\Controllers\UserController::class, 'service'])->name('layouts.frontend.service');
Route::get('/contact', [\App\Http\Controllers\UserController::class, 'contact'])->name('layouts.frontend.contact');
Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin.main');
Route::get('/reviewer', [\App\Http\Controllers\ReviewerController::class, 'reviewer'])->name('reviewer.main');
Route::get('/applicant', [\App\Http\Controllers\ApplicantController::class, 'applicant'])->name('applicant.main');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


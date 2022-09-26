<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
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
Route::get('/pembimbing', [\App\Http\Controllers\UserController::class, 'team'])->name('layouts.frontend.team');
Route::group(['middleware'=>['admin','auth','PreventBackHistory']], function(){
// Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin.main');
});

Route::group(['middleware'=>['reviewer','auth','PreventBackHistory']], function(){
Route::get('/reviewer', [\App\Http\Controllers\ReviewerController::class, 'reviewer'])->name('reviewer.main');
});

Route::group(['middleware'=>['applicant','auth','PreventBackHistory']], function(){
Route::get('/applicant', [\App\Http\Controllers\ApplicantController::class, 'applicant'])->name('applicant.main');
Route::get('/datadiri', [\App\Http\Controllers\DataDiriController::class, 'datadiri_index'])->name('applicant.datadiri.index');
Route::post('/datadiri-update', [\App\Http\Controllers\DataDiriController::class, 'profileupdate'])->name('profileupdate');
Route::get('/pendaftaran', [\App\Http\Controllers\PendaftaranController::class, 'daftar'])->name('applicant.pendaftaran.index');
});

Route::group(['middleware'=>['admin','auth','PreventBackHistory']], function(){
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin.main');
    Route::get('/datadiri-admin', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.datadiri.index');
    Route::get('/datadiri-show', [\App\Http\Controllers\AdminController::class, 'show'])->name('admin.datadiri.show');

    Route::get('/mentor', '\App\Http\Controllers\MentorController@index')->name('admin.mentor.index');
    Route::get('/create-mentor', '\App\Http\Controllers\MentorController@create')->name('admin.mentor.create');
    Route::get('/create-mentor', '\App\Http\Controllers\MentorController@store')->name('admin.mentor.create');
    Route::get('/edit-mentor{id}', '\App\Http\Controllers\MentorController@edit')->name('admin.mentor.edit');
    Route::get('/edit-mentor{id}', '\App\Http\Controllers\MentorController@update')->name('admin.mentor.edit');
    Route::get('/show-mentor/{id}', '\App\Http\Controllers\MentorController@show')->name('admin.mentor.show');
    Route::delete('/hapus-mentor/{mentor}', ['as' => 'admin.mentor.destroy', 'uses' => 'MentorController@destroy']);

});


Route::get('/table', [\App\Http\Controllers\ApplicantController::class, 'table'])->name('applicant.table');
Auth::routes();

Route::get('/forget-password', [\App\Http\Controllers\ForgotPasswordController::class, 'getEmail']);
Route::post('/forget-password', [\App\Http\Controllers\ForgotPasswordController::class, 'postEmail']);

Route::get('/reset-password/{token}', [\App\Http\Controllers\ResetPasswordController::class, 'getPassword']);
Route::post('/reset-password', [\App\Http\Controllers\ResetPasswordController::class, 'updatePassword']);


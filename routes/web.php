<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\MentorController;
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
    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'admin'])->name('admin.dashboard.main');
    Route::get('/datable', [\App\Http\Controllers\AdminController::class, 'datatable'])->name('admin.table.main');

    Route::get('/mentor', '\App\Http\Controllers\MentorController@index')->name('admin.dashboard.mentor.index');
    Route::get('/create-mentor', '\App\Http\Controllers\MentorController@create')->name('admin.dashboard.mentor.create');
    Route::post('/create-mentor', '\App\Http\Controllers\MentorController@store')->name('admin.dashboard.mentor.create');
    Route::get('/edit-mentor{id}', '\App\Http\Controllers\MentorController@edit')->name('admin.dashboard.mentor.edit');
    Route::post('/edit-mentor{id}', '\App\Http\Controllers\MentorController@update')->name('admin.dashboard.mentor.edit');
    Route::get('/show-mentor{id}', '\App\Http\Controllers\MentorController@show')->name('admin.dashboard.mentor.show');
    Route::delete('/hapus-mentor/{mentor}', '\App\Http\Controllers\MentorController@destroy')->name('admin.dashboard.mentor.destroy');

    Route::get('/bidang', '\App\Http\Controllers\BidangController@index')->name('admin.dashboard.bidang.index');
    Route::get('/create-bidang', '\App\Http\Controllers\BidangController@create')->name('admin.dashboard.bidang.create');
    Route::post('/create-bidang', '\App\Http\Controllers\BidangController@store')->name('admin.dashboard.bidang.create');
    Route::get('/edit-bidang', '\App\Http\Controllers\BidangController@edit')->name('admin.dashboard.bidang.edit');
    Route::get('/show-bidang', '\App\Http\Controllers\BidangController@show')->name('admin.dashboard.bidang.show');

    Route::get('/datadiri-admin', '\App\Http\Controllers\AdminController@index')->name('admin.dashboard.datadiri.index');
    Route::get('/datadiri-show', '\App\Http\Controllers\AdminController@show')->name('admin.dashboard.datadiri.show');

});

Route::group(['middleware'=>['reviewer','auth','PreventBackHistory']], function(){
Route::get('/reviewer', [\App\Http\Controllers\ReviewerController::class, 'reviewer'])->name('reviewer.main');
});

Route::group(['middleware'=>['applicant','auth','PreventBackHistory']], function(){
Route::get('/applicant', [\App\Http\Controllers\ApplicantController::class, 'applicant'])->name('applicant.main');
Route::get('/datadiri', [\App\Http\Controllers\DataDiriController::class, 'datadiri_index'])->name('applicant.datadiri.index');
Route::post('/datadiri-update', [\App\Http\Controllers\DataDiriController::class, 'profileupdate'])->name('profileupdate');
Route::get('/pendaftaran', [\App\Http\Controllers\PendaftaranController::class, 'daftar'])->name('applicant.pendaftaran.index');
Route::get('pendaftaran-create-step-one', [\App\Http\Controllers\PendaftaranController::class, 'createStepOne'])->name('pendaftaran.create.step.one');
Route::post('pendaftaran-create-step-one', [\App\Http\Controllers\PendaftaranController::class,'postCreateStepOne'])->name('pendaftaran.create.step.one.post');

Route::get('pendaftaran-create-step-two', [\App\Http\Controllers\PendaftaranController::class, 'createStepTwo'])->name('pendaftaran.create.step.two');
Route::post('pendaftaran-create-step-two', [\App\Http\Controllers\PendaftaranController::class, 'postCreateStepTwo'])->name('pendaftaran.create.step.two.post');

Route::get('pendaftaran-create-step-three', [\App\Http\Controllers\PendaftaranController::class, 'createStepThree'])->name('pendaftaran.create.step.three');
Route::post('pendaftaran-create-step-three', [\App\Http\Controllers\PendaftaranController::class, 'postCreateStepThree'])->name('pendaftaran.create.step.three.post');

Route::get('/kesan-applicant', [\App\Http\Controllers\KesanController::class, 'kesan'])->name('applicant.kesanpesan.index');
});

Route::get('/table', [\App\Http\Controllers\ApplicantController::class, 'table'])->name('applicant.table');
Auth::routes();

Route::get('/forget-password', [\App\Http\Controllers\ForgotPasswordController::class, 'getEmail']);
Route::post('/forget-password', [\App\Http\Controllers\ForgotPasswordController::class, 'postEmail']);

Route::get('/reset-password/{token}', [\App\Http\Controllers\ResetPasswordController::class, 'getPassword']);
Route::post('/reset-password', [\App\Http\Controllers\ResetPasswordController::class, 'updatePassword']);


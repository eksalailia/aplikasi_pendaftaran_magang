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
// Route::get('/contact', [\App\Http\Controllers\UserController::class, 'contact'])->name('layouts.frontend.contact');
Route::get('/contact', [\App\Http\Controllers\MessageController::class, 'create'])->name('layouts.frontend.message.create');
Route::post('/contactcreate', [\App\Http\Controllers\MessageController::class, 'store'])->name('layouts.frontend.message.store');
Route::get('/pembimbing', [\App\Http\Controllers\UserController::class, 'team'])->name('layouts.frontend.team');


Route::group(['middleware'=>['applicant','auth','PreventBackHistory']], function(){
    Route::get('/applicant', [\App\Http\Controllers\ApplicantController::class, 'applicant'])->name('applicant.main');
    Route::get('/applicant-datadiri', [\App\Http\Controllers\DataDiriController::class, 'index'])->name('applicant.datadiri.index');
    Route::get('/status-pendaftaran', [\App\Http\Controllers\PendaftaranController::class, 'index'])->name('applicant.pendaftaran.index');
    Route::get('/create-pendaftaran', '\App\Http\Controllers\PendaftaranController@create')->name('applicant.pendaftaran.create');
    Route::post('/create-pendaftaran', '\App\Http\Controllers\PendaftaranController@store')->name('applicant.pendaftaran.create');
    // Route::get('/applicant-kesanpesan', [\App\Http\Controllers\KesanController::class, 'index'])->name('applicant.kesan.index');
    Route::get('/create-kesanpesan', '\App\Http\Controllers\KesanController@create')->name('applicant.kesan.create');
    Route::post('/create-kesanpesan', '\App\Http\Controllers\KesanController@store')->name('applicant.kesan.create');
    Route::post('/datadiri-update', [\App\Http\Controllers\DataDiriController::class, 'profileupdate'])->name('profileupdate');
});

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

    Route::get('/pengumuman', '\App\Http\Controllers\PengumumanController@index')->name('admin.dashboard.pengumuman.index');
    Route::get('/create-pengumuman', '\App\Http\Controllers\PengumumanController@create')->name('admin.dashboard.pengumuman.create');
    Route::post('/create-pengumuman', '\App\Http\Controllers\PengumumanController@store')->name('admin.dashboard.pengumuman.create');
    Route::get('/edit-pengumuman{id}', '\App\Http\Controllers\PengumumanController@edit')->name('admin.dashboard.pengumuman.edit');
    Route::post('/edit-pengumuman{id}', '\App\Http\Controllers\PengumumanController@update')->name('admin.dashboard.pengumuman.edit');
    Route::get('/show-pengumuman{id}', '\App\Http\Controllers\PengumumanController@show')->name('admin.dashboard.pengumuman.show');
    Route::delete('/hapus-pengumuman/{pengumuman}', '\App\Http\Controllers\PengumumanController@destroy')->name('admin.dashboard.pengumuman.destroy');

    Route::get('/prosedur', '\App\Http\Controllers\ProsedurController@index')->name('admin.dashboard.prosedur.index');
    Route::get('/create-prosedur', '\App\Http\Controllers\ProsedurController@create')->name('admin.dashboard.prosedur.create');
    Route::post('/create-prosedur', '\App\Http\Controllers\ProsedurController@store')->name('admin.dashboard.prosedur.create');
    Route::get('/edit-prosedur{id}', '\App\Http\Controllers\ProsedurController@edit')->name('admin.dashboard.prosedur.edit');
    Route::post('/edit-prosedur{id}', '\App\Http\Controllers\ProsedurController@update')->name('admin.dashboard.prosedur.edit');
    Route::get('/show-prosedur{id}', '\App\Http\Controllers\ProsedurController@show')->name('admin.dashboard.prosedur.show');
    Route::delete('/hapus-prosedur/{prosedur}', '\App\Http\Controllers\ProsedurController@destroy')->name('admin.dashboard.prosedur.destroy');

    Route::get('/requirement', '\App\Http\Controllers\RequirementController@index')->name('admin.dashboard.requirement.index');
    Route::get('/create-requirement', '\App\Http\Controllers\RequirementController@create')->name('admin.dashboard.requirement.create');
    Route::post('/create-requirement', '\App\Http\Controllers\RequirementController@store')->name('admin.dashboard.requirement.create');
    Route::get('/edit-requirement{id}', '\App\Http\Controllers\RequirementController@edit')->name('admin.dashboard.requirement.edit');
    Route::post('/edit-requirement{id}', '\App\Http\Controllers\RequirementController@update')->name('admin.dashboard.requirement.edit');
    Route::get('/show-requirement{id}', '\App\Http\Controllers\RequirementController@show')->name('admin.dashboard.requirement.show');
    Route::delete('/hapus-requirement/{requirement}', '\App\Http\Controllers\RequirementController@destroy')->name('admin.dashboard.requirement.destroy');

    Route::get('/bidang', '\App\Http\Controllers\BidangController@index')->name('admin.dashboard.bidang.index');
    Route::get('/create-bidang', '\App\Http\Controllers\BidangController@create')->name('admin.dashboard.bidang.create');
    Route::post('/create-bidang', '\App\Http\Controllers\BidangController@store')->name('admin.dashboard.bidang.create');
    Route::get('/edit-bidang/{id}', '\App\Http\Controllers\BidangController@edit')->name('admin.dashboard.bidang.edit');
    Route::post('/edit-bidang/{id}', '\App\Http\Controllers\BidangController@update')->name('admin.dashboard.bidang.edit');
    Route::get('/show-bidang/{id}', '\App\Http\Controllers\BidangController@show')->name('admin.dashboard.bidang.show');
    Route::delete('/hapus-bidang/{id}', '\App\Http\Controllers\BidangController@destroy')->name('admin.dashboard.bidang.destroy');

    Route::get('/datadiri-admin', '\App\Http\Controllers\AdminController@index')->name('admin.dashboard.datadiri.index');
    Route::get('/show{id}', '\App\Http\Controllers\AdminController@show')->name('admin.dashboard.datadiri.show');
    Route::delete('/hapus-datadiri/{id}', '\App\Http\Controllers\AdminController@destroy')->name('admin.dashboard.datadiri.destroy');

    Route::get('/admin-kesanpesan', '\App\Http\Controllers\KesanController@index')->name('admin.dashboard.kesan.index');
    Route::get('/show-kesanpesan-admin/{id}', '\App\Http\Controllers\KesanController@show')->name('admin.dashboard.kesan.show');
    Route::delete('/hapus-kesanpesan/{id}', '\App\Http\Controllers\KesanController@destroy')->name('admin.dashboard.kesan.destroy');

    Route::get('/admin-contact', '\App\Http\Controllers\MessageController@index')->name('admin.dashboard.message.index');
    Route::get('/show-aspirasi/{id}', '\App\Http\Controllers\MessageController@show')->name('admin.dashboard.message.show');
    Route::delete('/hapus-contact/{id}', '\App\Http\Controllers\MessageController@destroy')->name('admin.dashboard.message.destroy');
    
    Route::get('/aspirasi', '\App\Http\Controllers\AspirasiController@index')->name('admin.dashboard.aspirasi.index');

    Route::get('/profileadmin-index', '\App\Http\Controllers\ProfileAdminController@index')->name('admin.dashboard.profile.index');
    Route::post('/profileadmin-update', '\App\Http\Controllers\ProfileAdminController@profileupdateadmin')->name('admin.profileupdate');

});

Route::group(['middleware'=>['reviewer','auth','PreventBackHistory']], function(){
    Route::get('/reviewer', [\App\Http\Controllers\ReviewerController::class, 'reviewer'])->name('reviewer.main');
    Route::get('/pendaftaran-review', '\App\Http\Controllers\ReviewerController@index')->name('reviewer.pendaftaran.index');
    Route::get('/showReview/{id}', '\App\Http\Controllers\ReviewerController@show')->name('reviewer.pendaftaran.show');
    Route::get('/showResume/{id}', '\App\Http\Controllers\ReviewerController@showResume')->name('reviewer.pendaftaran.showResume');
    Route::get('/showProposal/{id}', '\App\Http\Controllers\ReviewerController@showProposal')->name('reviewer.pendaftaran.showProposal');
    Route::delete('/hapus-pendaftaran-review/{id}', '\App\Http\Controllers\ReviewerController@destroy')->name('reviewer.pendaftaran.destroy');

    Route::get('/profilereviewer-index', '\App\Http\Controllers\ProfileReviewerController@index')->name('reviewer.profile.index');
    Route::post('/profilereviewer-update', '\App\Http\Controllers\ProfileReviewerController@profileupdatereviewer')->name('reviewer.profileupdate');

    Route::get('/status-acc/{id}', '\App\Http\Controllers\ReviewerController@acc')->name('reviewer.pendaftaran.acc');
    Route::get('/status-notacc/{id}', '\App\Http\Controllers\ReviewerController@notacc')->name('reviewer.pendaftaran.notacc');
});

Route::get('/table', [\App\Http\Controllers\ApplicantController::class, 'table'])->name('applicant.table');
Auth::routes();

Route::get('/forget-password', [\App\Http\Controllers\ForgotPasswordController::class, 'getEmail']);
Route::post('/forget-password', [\App\Http\Controllers\ForgotPasswordController::class, 'postEmail']);

Route::get('/reset-password/{token}', [\App\Http\Controllers\ResetPasswordController::class, 'getPassword']);
Route::post('/reset-password', [\App\Http\Controllers\ResetPasswordController::class, 'updatePassword']);


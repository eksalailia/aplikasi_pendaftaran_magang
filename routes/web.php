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
Route::get('/pengumuman-user', [\App\Http\Controllers\UserController::class, 'pengumuman'])->name('layouts.frontend.informasi.pengumuman');
Route::get('/requirement-user', [\App\Http\Controllers\UserController::class, 'requirement'])->name('layouts.frontend.informasi.requirement');
Route::get('/prosedur-user', [\App\Http\Controllers\UserController::class, 'prosedur'])->name('layouts.frontend.informasi.prosedur');

Route::group(['middleware'=>['mentor','auth','PreventBackHistory']], function(){
Route::get('/mentor-dashboard', [\App\Http\Controllers\PembimbingController::class, 'mentor'])->name('mentor.main');
Route::get('/mentor-profile', [\App\Http\Controllers\PembimbingController::class, 'profile'])->name('mentor.profile.index');
Route::post('/profilementor-update', [\App\Http\Controllers\PembimbingController::class, 'profileupdatementor'])->name('mentor.profile.update');
Route::get('/datamentoring', [\App\Http\Controllers\PembimbingController::class, 'index'])->name('mentor.pemetaan.index');
Route::get('/show-datamentoring/{id}', [\App\Http\Controllers\PembimbingController::class, 'show'])->name('mentor.pemetaan.show');
Route::get('/laporan-tugas', [\App\Http\Controllers\PembimbingController::class, 'laporantugas'])->name('laporantugas.index');
Route::get('/edit-laporan-tugas{id}', '\App\Http\Controllers\PembimbingController@edit')->name('laporantugas.edit');
Route::post('/edit-laporan-tugas{id}', '\App\Http\Controllers\PembimbingController@update')->name('laporantugas.edit');
Route::get('/showLaporan/{id}', '\App\Http\Controllers\PembimbingController@showLaporan')->name('laporantugas.showResume');

Route::get('/status-done/{id}', '\App\Http\Controllers\LaporanController@done')->name('mentor.laporan.done');
Route::get('/status-repair/{id}', '\App\Http\Controllers\LaporanController@repair')->name('mentor.laporan.repair');

});

Route::group(['middleware'=>['pendaftar','auth','PreventBackHistory']], function(){
    Route::get('/applicant', [\App\Http\Controllers\ApplicantController::class, 'applicant'])->name('applicant.main');
    Route::get('/applicant-datadiri', [\App\Http\Controllers\DataDiriController::class, 'index'])->name('applicant.datadiri.index');
    Route::get('/status-pendaftaran', [\App\Http\Controllers\PendaftaranController::class, 'index'])->name('applicant.pendaftaran.index');
    Route::get('/create-pendaftaran', '\App\Http\Controllers\PendaftaranController@create')->name('applicant.pendaftaran.create');
    Route::post('/create-pendaftaran', '\App\Http\Controllers\PendaftaranController@store')->name('applicant.pendaftaran.create');
    // Route::get('/applicant-kesanpesan', [\App\Http\Controllers\KesanController::class, 'index'])->name('applicant.kesan.index');
    Route::get('/create-kesanpesan', '\App\Http\Controllers\KesanController@create')->name('applicant.kesan.create');
    Route::post('/create-kesanpesan', '\App\Http\Controllers\KesanController@store')->name('applicant.kesan.create');
    Route::post('/datadiri-update', [\App\Http\Controllers\DataDiriController::class, 'profileupdate'])->name('profileupdate');

    Route::get('/laporantugas', [\App\Http\Controllers\LaporanController::class, 'index'])->name('laporan.index');
    Route::get('/create-laporan', '\App\Http\Controllers\LaporanController@create')->name('laporan.create');
    Route::post('/create-laporan', '\App\Http\Controllers\LaporanController@store')->name('laporan.create');
    Route::get('/edit-laporan{id}', '\App\Http\Controllers\LaporanController@edit')->name('laporan.edit');
    Route::post('/edit-laporan{id}', '\App\Http\Controllers\LaporanController@update')->name('laporan.edit');
    Route::get('/show-laporan{id}', '\App\Http\Controllers\LaporanController@show')->name('laporan.show');
    Route::delete('/hapus-laporan/{laporan}', '\App\Http\Controllers\LaporanController@destroy')->name('laporan.destroy');

    Route::get('/datapembimbing', [\App\Http\Controllers\ApplicantController::class, 'index'])->name('applicant.mentoring.index');
    Route::get('/show-datapembimbing/{id}', [\App\Http\Controllers\ApplicantController::class, 'show'])->name('applicant.mentoring.show');

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

    Route::get('peserta/cetak', '\App\Http\Controllers\AdminController@cetakpeserta')->name('admin.cetakpdf.cetakpendaftar');
    Route::get('peserta-lolos', '\App\Http\Controllers\AdminController@daftarpeserta')->name('admin.cetakpdf.daftarpeserta');

    Route::get('/status-aktivasi/{id}', '\App\Http\Controllers\AdminController@aktivasi')->name('admin.aktivasi');
    Route::get('/status-notaktivasi/{id}', '\App\Http\Controllers\AdminController@notaktivasi')->name('admin.notaktivasi');

    Route::get('cetak-laporanaktif', '\App\Http\Controllers\AdminController@formlaporanaktif')->name('admin.laporan.formaktif');
    Route::get('/cetak-laporan-pertanggal/{tglAwal}/{tglAkhir}', '\App\Http\Controllers\AdminController@laporanaktifPertanggal')->name('cetaklaporanaktif');

    Route::get('cetak-laporannonaktif', '\App\Http\Controllers\AdminController@formlaporannonaktif')->name('admin.laporan.formnonaktif');
    Route::get('/laporan-nonaktif-pertanggal/{tglAwal}/{tglAkhir}', '\App\Http\Controllers\AdminController@laporannonaktifPertanggal')->name('cetaklaporannonaktif');

    Route::get('/mentoring', '\App\Http\Controllers\MentoringController@index')->name('admin.dashboard.mentoring.index');
    Route::get('/create-mentoring', '\App\Http\Controllers\MentoringController@create')->name('admin.dashboard.mentoring.create');
    Route::post('/create-mentoring', '\App\Http\Controllers\MentoringController@store')->name('admin.dashboard.mentoring.create');
    Route::get('/show-mentoring/{id}', '\App\Http\Controllers\MentoringController@show')->name('admin.dashboard.mentoring.show');
    Route::get('/edit-mentoring/{id}', '\App\Http\Controllers\MentoringController@edit')->name('admin.dashboard.mentoring.edit');
    Route::post('/edit-mentoring/{id}', '\App\Http\Controllers\MentoringController@update')->name('admin.dashboard.mentoring.edit');
    Route::delete('/hapus-mentoring/{id}', '\App\Http\Controllers\MentoringController@destroy')->name('admin.dashboard.mentoring.destroy');

});

Route::group(['middleware'=>['reviewer','auth','PreventBackHistory']], function(){
    Route::get('/reviewer', [\App\Http\Controllers\ReviewerController::class, 'reviewer'])->name('reviewer.main');
    Route::get('/pendaftaran-review', '\App\Http\Controllers\ReviewerController@index')->name('reviewer.pendaftaran.index');
    Route::get('/showReview/{id}', '\App\Http\Controllers\ReviewerController@show')->name('reviewer.pendaftaran.show');
    Route::get('/showResume/{id}', '\App\Http\Controllers\ReviewerController@showResume')->name('reviewer.pendaftaran.showResume');
    Route::get('/showProposal/{id}', '\App\Http\Controllers\ReviewerController@showProposal')->name('reviewer.pendaftaran.showProposal');
    Route::delete('/hapus-pendaftaran-review/{id}', '\App\Http\Controllers\ReviewerController@destroy')->name('reviewer.pendaftaran.destroy');
    Route::get('pesertalolos', '\App\Http\Controllers\ReviewerController@pesertalolos')->name('reviewer.pendaftaran.pesertalolos');

    Route::get('/profilereviewer-index', '\App\Http\Controllers\ProfileReviewerController@index')->name('reviewer.profile.index');
    Route::post('/profilereviewer-update', '\App\Http\Controllers\ProfileReviewerController@profileupdatereviewer')->name('reviewer.profileupdate');

    Route::get('/status-acc/{id}', '\App\Http\Controllers\ReviewerController@acc')->name('reviewer.pendaftaran.acc');
    Route::get('/status-notacc/{id}', '\App\Http\Controllers\ReviewerController@notacc')->name('reviewer.pendaftaran.notacc');

    Route::get('/formEmail', '\App\Http\Controllers\SendEmailController@index')->name('reviewer.sendemail.email');
    Route::post('/send', '\App\Http\Controllers\SendEmailController@send')->name('reviewer.sendemail.send');

});

Route::get('/table', [\App\Http\Controllers\ApplicantController::class, 'table'])->name('applicant.table');
Auth::routes();

Route::get('/forget-password', [\App\Http\Controllers\ForgotPasswordController::class, 'getEmail']);
Route::post('/forget-password', [\App\Http\Controllers\ForgotPasswordController::class, 'postEmail']);

Route::get('/reset-password/{token}', [\App\Http\Controllers\ResetPasswordController::class, 'getPassword']);
Route::post('/reset-password', [\App\Http\Controllers\ResetPasswordController::class, 'updatePassword']);


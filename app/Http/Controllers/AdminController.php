<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\User;
use App\Models\Pendaftaran;
use File;
use Session;

class AdminController extends Controller
{
    public function admin(){
        $jumlah_mentor = DB::table('mentor')->count();
        $jumlah_bidang = DB::table('bidang')->count();
        $jumlah_kesanpesan = DB::table('kesanpesan')->count();
        $jumlah_aspirasi = DB::table('message')->count();
        return view('admin.dashboard.main', compact('jumlah_mentor', 'jumlah_bidang', 'jumlah_kesanpesan',
                    'jumlah_aspirasi'));
    }
    public function index(){
        $Users = User::orderBy('created_at','ASC')
        ->where('role', 'applicant')
        ->get();
        return view('admin.dashboard.datadiri.index', compact('Users'));

    }
    public function show($id){
        $data= User::find($id);
        return view('admin.dashboard.datadiri.show', compact('data'));
    }
    public function datatable(){
        return view('admin.table.main');
    }

    public function destroy($id)
    {
        $Users = User::find($id);
        $Users->delete();
        if ($Users) {
            Session::flash('success','Sukses Delete Data');
            return redirect()->route('applicant.datadiri.index');
        } else {
            Session::flash('success','Failed Delete Data');
            return redirect()->route('applicant.datadiri.index');
        }
    }

    public function index_daftar(){
        $pendaftaran = Pendaftaran::orderBy('created_at','ASC')
        ->where('role', 'applicant')
        ->get();
        return view('admin.dashboard.pendaftaran.index', compact('pendaftaran'));

    }
    public function show_daftar($id){
        $data= Pendaftaran::find($id);
        return view('admin.dashboard.pendaftaran.show', compact('data'));
    }

    public function destroy_daftar($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        if ( $pendaftaran) {
            Session::flash('success','Sukses Delete Data');
            return redirect()->route('applicant.pendaftaran.index');
        } else {
            Session::flash('success','Failed Delete Data');
            return redirect()->route('applicant.pendaftaran.index');
        }
    }

    public function daftarpeserta() {
        $pendaftaran = Pendaftaran::orderBy('created_at','ASC')
        ->where('status', '1')
        ->get();
        return view('admin.dashboard.cetakpdf.daftarpeserta', compact('pendaftaran'));
    }

    public function aktivasi($id){
        Pendaftaran::find($id)->update([
            'status_aktivasi'=>1,
            'tgl_aktivasi'=> date("Y-m-d H:i:s")
        ]);
        Session::flash('update','Update Data Status Aktivasi Pendaftaran Berhasil');
        return redirect()->route('admin.cetakpdf.daftarpeserta');
    }

    public function notaktivasi($id){
        Pendaftaran::find($id)->update([
            'status_aktivasi'=>2,
            'tgl_aktivasi'=> date("Y-m-d H:i:s")
        ]);
        Session::flash('update','Update Data Status Aktivasi Pendaftaran Berhasil');
        return redirect()->route('admin.cetakpdf.daftarpeserta');
    }

    public function cetakpeserta()
    {
    $pendaftaran = Pendaftaran::orderBy('created_at','ASC')
                    ->where('status', 1)
                    ->where('status_aktivasi', 1)
                    ->get();

    $pdf = PDF::loadView('admin.dashboard.cetakpdf.cetakpendaftar', ['pendaftaran' => $pendaftaran]);
    return $pdf->stream('Laporan-Data-Pendaftar-Lolos.pdf');
    }

    public function formlaporanaktif()
    {
        return view('admin.dashboard.laporan.FormLaporan');
    }

    public function laporanaktifPertanggal($tglAwal, $tglAkhir){
        $laporanaktif = Pendaftaran::orderBy('created_at','ASC')
                            ->whereBetween('tgl_aktivasi', [$tglAwal, $tglAkhir])
                            ->where('status', 1)
                            ->where('status_aktivasi', 1)
                            ->get();

        $pdf = PDF::loadView('admin.dashboard.laporan.laporanaktif', ['laporanaktif' => $laporanaktif]);
        return $pdf->stream('Laporan-Data-Peserta-Aktif.pdf');
    }

    public function formlaporannonaktif()
    {
        return view('admin.dashboard.laporan.FormNonAktif');
    }

    public function laporannonaktifPertanggal($tglAwal, $tglAkhir){
        $laporannonaktif = Pendaftaran::orderBy('created_at','ASC')
                            ->whereBetween('tgl_aktivasi', [$tglAwal, $tglAkhir])
                            ->where('status', 1)
                            ->where('status_aktivasi', 2)
                            ->get();

        $pdf = PDF::loadView('admin.dashboard.laporan.laporannonaktif', ['laporannonaktif' => $laporannonaktif]);
        return $pdf->stream('Laporan-Data-Peserta-NonAktif.pdf');
    }

}

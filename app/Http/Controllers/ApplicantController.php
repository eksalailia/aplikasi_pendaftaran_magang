<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Pendaftaran;
class ApplicantController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function applicant(){
        $pendaftar_waiting = DB::table('pendaftaran')
        ->whereNull('status')
        ->count();
        $pendaftar_lolos = DB::table('pendaftaran')
        ->where('status', 1)
        ->count();
        $pendaftar_tidaklolos = DB::table('pendaftaran')
        ->where('status', 2)
        ->count();
        return view('applicant.main', compact('pendaftar_waiting', 'pendaftar_lolos', 'pendaftar_tidaklolos'));
    }
    public function table(){
        return view('applicant.table');
    }
}

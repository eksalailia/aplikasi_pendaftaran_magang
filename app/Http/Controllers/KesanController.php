<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KesanPesan;
use Session;

class KesanController extends Controller
{
    // public function index(){
    //     return view('applicant.kesan.index');
    // }

    public function create(){
        return view('applicant.kesan.create');
    }

    public function store(Request $request) {
        $kesanpesan = new kesanpesan;
        $kesanpesan->nama = $request->nama;
        $kesanpesan->instansi = $request->instansi;
        $kesanpesan->isi = $request->isi;
        $kesanpesan->save();
        if ($kesanpesan) {
            Session::flash('success','Sukses Tambah Data');
            return redirect()->route('applicant.kesan.index');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('applicant.kesan.index');
        }
    }
}

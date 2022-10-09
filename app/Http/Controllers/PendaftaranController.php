<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pendaftaran;
use App\Models\Bidang;
use App\Models\User;
use Session;

class PendaftaranController extends Controller
{
    public function index(){
        return view('applicant.pendaftaran.index');
    }

    public function create(){
        $data=Bidang::all();
        $user=User::all()
        ->where('role','applicant');
        return view('applicant.pendaftaran.create', compact('user', 'data'));
    }

    public function store(Request $request) {
        
        $file = $request->file('resume');
        $org = $file->getClientOriginalName();
        $path = 'resume';
        $file->move($path,$org);

        $files = $request->file('proposal');
        $props = $files->getClientOriginalName();
        $paths = 'proposal';
        $files->move($paths,$props);
        
        $pendaftaran = new pendaftaran;
        $pendaftaran->user_id = $request->user;
        $pendaftaran->bidang_id = $request->bidang;
        $pendaftaran->tahun_akademik = $request->input('tahun_akademik');
        $pendaftaran->jurusan = $request->input('jurusan');
        $pendaftaran->durasi = $request->input('durasi');
        $pendaftaran->peserta1 = $request->input('peserta1');
        $pendaftaran->peserta2 = $request->input('peserta2');
        $pendaftaran->peserta3 = $request->input('peserta3');
        $pendaftaran->resume = $org;
        $pendaftaran->proposal = $props;
        $pendaftaran->save();
        if ($pendaftaran) {
            Session::flash('success','Pendaftaran Berhasil');
            return redirect()->route('applicant.pendaftaran.create');
        } else {
            Session::flash('failed','Pendaftaran Gagal');
            return redirect()->route('applicant.pendaftaran.create');
        }
    }
}


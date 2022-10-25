<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Laporan;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Validator;

class LaporanController extends Controller
{
    public function index(){
        $laporan = laporan::all();
        return view('applicant.laporan.index', compact('laporan'));
    }

    public function create(){
        $pembimbing=User::all()
        ->where('role', 'mentor');
        $pendaftar=User::all()
        ->where('role','pendaftar');
        return view('applicant.laporan.create', compact('pembimbing', 'pendaftar'));
    }

    public function store(Request $request) {
        $laporan = new laporan;
        $laporan->user_id = $request->user;
        $laporan->mentor_id = $request->users;
        $laporan->anggota = $request->input('anggota');
        $laporan->judul= $request->input('judul');
        $laporan->isi = $request->input('isi');
        $laporan->save();
        if ($laporan) {
            Session::flash('success','Data Laporan Berhasil Ditambahkan');
            return redirect()->route('laporan.index');
        } else {
            Session::flash('failed','Data Laporan Gagal Ditambahkan');
            return redirect()->route('laporan.index');
        }
    }

    public function edit($id){
        $data = Laporan::all();
        $laporan = Laporan::find($id);
        $mentor=User::all()
        ->where('role', 'mentor');
        $pendaftar=User::all()
        ->where('role','pendaftar');
        return view('applicant.laporan.edit',compact('data','laporan', 'mentor', 'pendaftar'));
    }

    public function update(Request $request, $id)
    {
            $laporan = Laporan::find($id) ;
            $laporan->user_id = $request->user;
            $laporan->mentor_id = $request->users;
            $laporan->anggota = $request->input('anggota');
            $laporan->judul= $request->input('judul');
            $laporan->isi = $request->input('isi');
            $laporan->save();
            if ($laporan) {
                Session::flash('update','Update Data Laporan Berhasil');
                return redirect()->route('laporan.index');
            } else {
                Session::flash('failed','Update Data Laporan Gagal');
                return redirect()->route('laporan.index');
            }
        }

    public function show($id)
    {
        $laporan= Laporan::find($id);
        return view('applicant.laporan.show', compact('laporan'));
    }
    public function destroy($id) {
        // Alert::success('Profil Berhasi Dihapus','Sukses');
        Laporan::find($id)->delete();
        Session::flash('delete','Data Laporan Berhasil Dihapus');
        return redirect()->route('laporan.index');
    }
}

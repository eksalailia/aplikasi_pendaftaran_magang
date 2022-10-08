<?php

namespace App\Http\Controllers;

use App\Models\Pengumuman;
use Illuminate\Http\Request;
use Session;

class PengumumanController extends Controller
{
    public function index()
    {
        $pengumuman = pengumuman::all();
        return view('admin.dashboard.pengumuman.index', compact('pengumuman'));
    }

    public function create(){
        $data=pengumuman::all();
        return view('admin.dashboard.pengumuman.create', compact('data'));
    }
    public function store(Request $request)
    {

        $pengumuman = new pengumuman;
        $pengumuman->judul = $request->judul;
        $pengumuman->tanggal = $request->tanggal;
        $pengumuman->isi = $request->isi;
        $pengumuman->status = $request->status;
        $pengumuman->save();
        if ($pengumuman) {
            Session::flash('success','Data Pengumuman Berhasil Ditambahkan');
            return redirect()->route('admin.dashboard.pengumuman.index');
        } else {
            Session::flash('failed','Data Pengumuman Gagal Ditambahkan');
            return redirect()->route('admin.dashboard.pengumuman.index');
        }
    }

    public function edit($id){
        $data = pengumuman::all();
        $pengumuman = pengumuman::find($id);
        return view('admin.dashboard.pengumuman.edit',compact('data','pengumuman'));
    }

    public function update(Request $request, $id)
    {
            $pengumuman = pengumuman::find($id);
            $pengumuman->judul = $request->judul;
            $pengumuman->tanggal = $request->tanggal;
            $pengumuman->isi = $request->isi;
            $pengumuman->status = $request->status;
            $pengumuman->save();

        if ($pengumuman) {
                Session::flash('update','Update Data Pengumuman Berhasil');
                return redirect()->route('admin.dashboard.pengumuman.index');
            } else {
                Session::flash('failed','Update Data Pengumuman Gagal');
                return redirect()->route('admin.dashboard.pengumuman.index');
            }
    }

    public function show($id)
    {
        $pengumuman= pengumuman::find($id);
        return view('admin.dashboard.pengumuman.show', compact('pengumuman'));
    }
    public function destroy($id) {
        // Alert::success('Profil Berhasi Dihapus','Sukses');
        pengumuman::find($id)->delete();
        Session::flash('delete','Data Pengumuman Berhasil Dihapus');
        return redirect()->route('admin.dashboard.pengumuman.index');
    }
}


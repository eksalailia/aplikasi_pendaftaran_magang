<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prosedur;
use Session;

class ProsedurController extends Controller
{
    public function index()
    {
        $prosedur = prosedur::all();
        return view('admin.dashboard.prosedur.index', compact('prosedur'));
    }

    public function create(){
        $data=prosedur::all();
        return view('admin.dashboard.prosedur.create', compact('data'));
    }
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $org = $file->getClientOriginalName();
        $path = 'foto';
        $file->move($path,$org);

        $prosedur = new prosedur;
        $prosedur->judul = $request->judul;
        $prosedur->isi = $request->isi;
        $prosedur->foto = $org;
        $prosedur->save();
        if ($prosedur) {
            Session::flash('success','Data Prosedur Berhasil Ditambahkan');
            return redirect()->route('admin.dashboard.prosedur.index');
        } else {
            Session::flash('failed','Data Prosedur Gagal Ditambahkan');
            return redirect()->route('admin.dashboard.prosedur.index');
        }
    }

    public function edit($id){
        $data = prosedur::all();
        $prosedur = prosedur::find($id);
        return view('admin.dashboard.prosedur.edit',compact('data','prosedur'));
    }

    public function update(Request $request, $id)
    {
        $foto = $request->file('foto');
        if ($foto == "") {
            $prosedur = prosedur::find($id);
            $prosedur->judul = $request->judul;
            $prosedur->isi = $request->isi;
            $prosedur->save();

           if ($prosedur) {
                Session::flash('update','Update Data Prosedur Berhasil');
                return redirect()->route('admin.dashboard.prosedur.index');
            } else {
                Session::flash('failed','Update Data Prosedur Gagal');
                return redirect()->route('admin.dashboard.prosedur.index');
            }
        } else {
            $file = $request->file('foto');
            $org = $file->getClientOriginalName();
            $path = 'foto';
            $file->move($path,$org);

            $prosedur = prosedur::find($id) ;
            $prosedur->judul = $request->judul;
            $prosedur->isi = $request->isi;
            $prosedur->foto = $org;
            $prosedur->save();
            if ($prosedur) {
                Session::flash('update','Update Data Prosedur Berhasil');
                return redirect()->route('admin.dashboard.prosedur.index');
            } else {
                Session::flash('failed','Update Data Prosedur Gagal');
                return redirect()->route('admin.dashboard.prosedur.index');
            }
        }
    }

    public function show($id)
    {
        $prosedur= prosedur::find($id);
        return view('admin.dashboard.prosedur.show', compact('prosedur'));
    }
    public function destroy($id) {
        // Alert::success('Profil Berhasi Dihapus','Sukses');
        prosedur::find($id)->delete();
        Session::flash('delete','Data Prosedur Berhasil Dihapus');
        return redirect()->route('admin.dashboard.prosedur.index');
    }
}



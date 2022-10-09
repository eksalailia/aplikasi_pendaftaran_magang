<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requirement;
use Session;

class RequirementController extends Controller
{
    public function index()
    {
        $requirement = requirement::all();
        return view('admin.dashboard.requirement.index', compact('requirement'));
    }

    public function create(){
        $data=requirement::all();
        return view('admin.dashboard.requirement.create', compact('data'));
    }
    public function store(Request $request)
    {
        $file = $request->file('foto');
        $org = $file->getClientOriginalName();
        $path = 'foto';
        $file->move($path,$org);

        $requirement = new requirement;
        $requirement->judul = $request->judul;
        $requirement->isi = $request->isi;
        $requirement->foto = $org;
        $requirement->save();
        if ($requirement) {
            Session::flash('success','Data Requirement Berhasil Ditambahkan');
            return redirect()->route('admin.dashboard.requirement.index');
        } else {
            Session::flash('failed','Data Requirement Gagal Ditambahkan');
            return redirect()->route('admin.dashboard.requirement.index');
        }
    }

    public function edit($id){
        $data = requirement::all();
        $requirement = requirement::find($id);
        return view('admin.dashboard.requirement.edit',compact('data','requirement'));
    }

    public function update(Request $request, $id)
    {
        $foto = $request->file('foto');
        if ($foto == "") {
            $requirement = requirement::find($id);
            $requirement->judul = $request->judul;
            $requirement->isi = $request->isi;
            $requirement->save();

           if ($requirement) {
                Session::flash('update','Update Data Requirement Berhasil');
                return redirect()->route('admin.dashboard.requirement.index');
            } else {
                Session::flash('failed','Update Data Requirement Gagal');
                return redirect()->route('admin.dashboard.requirement.index');
            }
        } else {
            $file = $request->file('foto');
            $org = $file->getClientOriginalName();
            $path = 'foto';
            $file->move($path,$org);

            $requirement = requirement::find($id) ;
            $requirement->judul = $request->judul;
            $requirement->isi = $request->isi;
            $requirement->foto = $org;
            $requirement->save();
            if ($requirement) {
                Session::flash('update','Update Data Requirement Berhasil');
                return redirect()->route('admin.dashboard.requirement.index');
            } else {
                Session::flash('failed','Update Data Requirement Gagal');
                return redirect()->route('admin.dashboard.requirement.index');
            }
        }
    }

    public function show($id)
    {
        $requirement= requirement::find($id);
        return view('admin.dashboard.requirement.show', compact('requirement'));
    }
    public function destroy($id) {
        // Alert::success('Profil Berhasi Dihapus','Sukses');
        requirement::find($id)->delete();
        Session::flash('delete','Data Requirement Berhasil Dihapus');
        return redirect()->route('admin.dashboard.requirement.index');
    }
}



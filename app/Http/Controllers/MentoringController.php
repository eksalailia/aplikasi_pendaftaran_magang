<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Mentoring;
use App\Models\User;
use Session;
use Illuminate\Support\Facades\Validator;

class MentoringController extends Controller
{
    public function index(){
        $mentoring = mentoring::with('user')->get();
        return view('admin.dashboard.mentoring.index', compact('mentoring'));
    }

    public function create(){
        $mentor=User::all()
        ->where('role', 'mentor');
        $pendaftar=User::all()
        ->where('role','pendaftar');
        return view('admin.dashboard.mentoring.create', compact('mentor', 'pendaftar'));
    }

    public function store(Request $request) {
        $mentoring = new mentoring;
        $mentoring->user_id = $request->user;
        $mentoring->mentor_id = $request->users;
        $mentoring->anggota = $request->input('anggota');
        $mentoring->jurusan = $request->input('jurusan');
        $mentoring->universitas = $request->input('universitas');
        $mentoring->semester = $request->input('semester');
        $mentoring->save();
        if ($mentoring) {
            Session::flash('success','Data Mentoring Berhasil Ditambahkan');
            return redirect()->route('admin.dashboard.mentoring.create');
        } else {
            Session::flash('failed','Data Mentoring Gagal Ditambahkan');
            return redirect()->route('admin.dashboard.mentoring.create');
        }
    }

    public function edit($id){
        $data = Mentoring::all();
        $mentoring = Mentoring::find($id);
        $mentor=User::all()
        ->where('role', 'mentor');
        $pendaftar=User::all()
        ->where('role','pendaftar');
        return view('admin.dashboard.mentoring.edit',compact('data','mentoring', 'mentor', 'pendaftar'));
    }

    public function update(Request $request, $id)
    {
            $mentoring = Mentoring::find($id) ;
            $mentoring->user_id = $request->user;
            $mentoring->mentor_id = $request->users;
            $mentoring->anggota = $request->input('anggota');
            $mentoring->jurusan = $request->input('jurusan');
            $mentoring->universitas = $request->input('universitas');
            $mentoring->semester = $request->input('semester');
            $mentoring->save();
            if ($mentoring) {
                Session::flash('update','Update Data Mentoring Berhasil');
                return redirect()->route('admin.dashboard.mentoring.index');
            } else {
                Session::flash('failed','Update Data Mentoring Gagal');
                return redirect()->route('admin.dashboard.mentoring.index');
            }
        }

    public function show($id)
    {
        $mentoring= Mentoring::find($id);
        return view('admin.dashboard.mentoring.show', compact('mentoring'));
    }
    public function destroy($id) {
        // Alert::success('Profil Berhasi Dihapus','Sukses');
        Mentoring::find($id)->delete();
        Session::flash('delete','Data Mentoring Berhasil Dihapus');
        return redirect()->route('admin.dashboard.mentoring.index');
    }
}

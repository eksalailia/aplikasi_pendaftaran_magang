<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Mentoring;
use App\Models\Laporan;
use File;
use Session;

class PembimbingController extends Controller
{
    public function mentor(){
        return view('mentor.main');
    }
    public function profile(){
        return view('mentor.profile.index');
    }

    public function index(){
        $mentoring = mentoring::all();
        return view('mentor.pemetaan.index', compact('mentoring'));
    }

    public function show($id)
    {
        $mentoring= Mentoring::find($id);
        return view('mentor.pemetaan.show', compact('mentoring'));
    }


    public function profileupdatementor(Request $request) {

        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);
        $user->name = $request->input('name');
        $user->jabatan = $request->input('jabatan');
        $user->nip = $request->input('nip');
        $user->email = $request->input('email');
        $user->no_tlp = $request->input('no_tlp');

        if($request->hasfile('foto')) {

            $destination = 'backend/assets/uploads/profile/'.$user->foto;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('foto');
            $extension= $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('backend/assets/uploads/profile/', $filename);
            $user->foto = $filename;
        }

        $user->update();
        if ($user) {
            Session::flash('success','Sukses Update Data Diri');
                return redirect()->route('mentor.profile.index');
            } else {
                Session::flash('failed','Failed Update Data Diri');
                return redirect()->route('mentor.profile.index');
            }
        }

        public function laporantugas(){
            $laporan = laporan::with('users')->get();
            return view('mentor.laporan.index', compact('laporan'));
        }
}

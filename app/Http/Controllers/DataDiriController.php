<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use File;
use Session;

class DataDiriController extends Controller
{
    public function index(){
        $Users = User::orderBy('created_at','ASC')
        ->get();
        return view('applicant.datadiri.index', compact('Users'));
    }

    public function profileupdate(Request $request) {

            $user_id = Auth::user()->id;
            $user = User::findOrFail($user_id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->jenis_kelamin = $request->input('jenis_kelamin');
            $user->tempat_lahir = $request->input('tempat_lahir');
            $user->tanggal_lahir= $request->input('tanggal_lahir');
            $user->no_tlp = $request->input('no_tlp');
            $user->alamat = $request->input('alamat');
            $user->univ = $request->input('univ');
            $user->nim = $request->input('nim');
            $user->jurusan = $request->input('jurusan');
            $user->semester = $request->input('semester');

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
                    return redirect()->route('applicant.datadiri.index');
                } else {
                    Session::flash('failed','Failed Update Data Diri');
                    return redirect()->route('applicant.datadiri.index');
                }
    }
    public function show($id){
        $data= Users::find($id);
        return view('applicant.datadiri.show', compact('data'));
    }

    public function destroy($id)
    {
        $Users = User::find($id);
        $Users->delete();
        if ($Users) {
            Session::flash('delete','Data Peserta Berhasil Dihapus');
            return redirect()->route('applicant.datadiri.index');
        } else {
            Session::flash('failed','Failed Hapus Data Peserta');
            return redirect()->route('applicant.datadiri.index');
        }
    }

}


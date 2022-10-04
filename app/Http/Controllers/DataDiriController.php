<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use File;

class DataDiriController extends Controller
{
    public function index(){
        return view('applicant.datadiri.index');
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
            return redirect()->back()->with('status', "Data Diri berhasil di update");
    }
}

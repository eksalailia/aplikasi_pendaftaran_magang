<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;

class MentorController extends Controller
{
    public function index(Request $request){
        $mentor=User::all()
        ->where('role', 'mentor');
        return view('admin.dashboard.mentor.index', compact('mentor'));

    }

    public function create(){
        $mentor=User::all();
        return view('admin.dashboard.mentor.create', compact('mentor'));
    }

    public function store(Request $request) {
        $mentor = new user;
        $mentor->name = $request->input('name');
        $mentor->email = $request->input('email');
        $mentor->role = $request->input('role');
        $mentor->password = Hash::make($request->input('password'));
        $mentor->save();
        if ($mentor) {
            Session::flash('success','Data Mentor Berhasil Ditambahkan');
            return redirect()->route('admin.dashboard.mentor.create');
        } else {
            Session::flash('failed','Data Mentor Gagal Ditambahkan');
            return redirect()->route('admin.dashboard.mentor.create');
        }
    }
    
    public function show($id)
    {
        $mentors= User::find($id)
        ->where('role', 'mentor');
        return view('admin.dashboard.mentor.show', compact('mentors'));
    }
    public function destroy($id) {
        // Alert::success('Profil Berhasi Dihapus','Sukses');
        User::find($id)->delete();
        Session::flash('delete','Data Mentor Berhasil Dihapus');
        return redirect()->route('admin.dashboard.mentor.index');
    }
}


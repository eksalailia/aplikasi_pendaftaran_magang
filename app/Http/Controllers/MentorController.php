<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class MentorController extends Controller
{
    public function index(Request $request){
        $mentor=User::all()
        ->where('role', 'mentor');
        return view('admin.dashboard.mentor.index', compact('mentor'));

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


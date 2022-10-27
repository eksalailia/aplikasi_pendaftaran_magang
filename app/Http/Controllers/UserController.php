<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\Pengumuman;
use App\Models\Requirement;
use App\Models\Prosedur;
use App\Models\User;
use App\Models\KesanPesan;

class UserController extends Controller
{
    public function index(){
        $kesanpesan=kesanpesan::all();
        return view('layouts.frontend.index', compact('kesanpesan'));
    }
    public function about(){
        return view('layouts.frontend.about');
    }
    public function service(){
        return view('layouts.frontend.service');
    }
    public function contact(){
        return view('layouts.frontend.contact');
    }
    public function team(){
        $mentor=User::all()
        ->where('role', 'mentor');
        return view('layouts.frontend.team', compact('mentor'));
    }
    public function pengumuman(){
        $pengumuman=Pengumuman::all();
        return view('layouts.frontend.informasi.pengumuman', compact('pengumuman'));
    }
    public function requirement(){
        $requirement=Requirement::all();
        return view('layouts.frontend.informasi.requirement', compact('requirement'));
    }
    public function prosedur(){
        $prosedur=Prosedur::all();
        return view('layouts.frontend.informasi.prosedur', compact('prosedur'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mentor;
use App\Models\Pengumuman;
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
        $mentor=Mentor::all();
        return view('layouts.frontend.team', compact('mentor'));
    }
    public function pengumuman(){
        $pengumuman=Pengumuman::all();
        return view('layouts.frontend.informasi.pengumuman', compact('pengumuman'));
    }
    public function requirement(){
        return view('layouts.frontend.informasi.requirement');
    }
    public function prosedur(){
        return view('layouts.frontend.informasi.prosedur');
    }
}

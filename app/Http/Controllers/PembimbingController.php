<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    public function mentor(){
        return view('mentor.main');
    }
    public function profile(){
        return view('mentor.profile.index');
    }
}

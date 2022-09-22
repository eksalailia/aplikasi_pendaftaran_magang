<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('layouts.frontend.index');
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
        return view('layouts.frontend.team');
    }
}

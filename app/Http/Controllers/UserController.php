<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('layouts.main');
    }
    public function about(){
        return view('layouts.about');
    }
    public function service(){
        return view('layouts.service');
    }
    public function contact(){
        return view('layouts.contact');
    }
}

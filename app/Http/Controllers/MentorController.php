<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MentorController extends Controller
{
    public function index(){
        return view('admin.mentor.index');
    }
    public function create(){
        return view('admin.mentor.create');
    }
    public function show(){
        return view('admin.mentor.show');
    }
}

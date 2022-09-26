<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.main');
    }
    public function index(){
        return view('admin.datadiri.index');
    }
    public function show(){
        return view('admin.datadiri.show');
    }

}

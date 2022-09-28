<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.dashboard.main');
    }
    public function index(){
        return view('admin.dashboard.datadiri.index');
    }
    public function show(){
        return view('admin.dashboard.datadiri.show');
    }
    public function datatable(){
        return view('admin.table.main');
    }

}

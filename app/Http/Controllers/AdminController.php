<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function admin(){
        // $data = DB::table('pegawai')->paginate(10);
        return view('admin.main');
    }
}

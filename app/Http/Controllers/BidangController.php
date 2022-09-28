<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index(){
        return view('admin.dashboard.bidang.index');
    }
    public function create(){
        return view('admin.dashboard.bidang.create');
    }
    public function edit(){
        return view('admin.dashboard.bidang.edit');
    }
    public function show(){
        return view('admin.dashboard.bidang.show');
    }

}

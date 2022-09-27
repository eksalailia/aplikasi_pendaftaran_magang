<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BidangController extends Controller
{
    public function index(){
        return view('admin.bidang.index');
    }
    public function create(){
        return view('admin.bidang.create');
    }
    public function edit(){
        return view('admin.bidang.edit');
    }
    public function show(){
        return view('admin.bidang.show');
    }

}

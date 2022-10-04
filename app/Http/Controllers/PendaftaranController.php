<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index(){
        return view('applicant.pendaftaran.index');
    }

    public function create(){
        return view('applicant.pendaftaran.create');
    }
}


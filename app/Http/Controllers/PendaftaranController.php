<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function daftar(){
        return view('applicant.pendaftaran.index');
    }
}


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function applicant(){
        return view('applicant.main');
    }
    public function table(){
        return view('applicant.table');
    }
}

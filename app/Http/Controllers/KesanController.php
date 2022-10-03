<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesanController extends Controller
{
    public function index(){
        return view('applicant.kesan.index');
    }
}

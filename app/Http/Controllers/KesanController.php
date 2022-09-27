<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesanController extends Controller
{
    public function kesan(){
        return view('applicant.kesanpesan.index');
    }
}

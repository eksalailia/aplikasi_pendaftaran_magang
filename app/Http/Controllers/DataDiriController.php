<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    public function datadiri_index(){
        return view('applicant.datadiri.index');
    }
}

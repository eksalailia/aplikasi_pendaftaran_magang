<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    public function reviewer(){
        return view('reviewer.main');
    }
}

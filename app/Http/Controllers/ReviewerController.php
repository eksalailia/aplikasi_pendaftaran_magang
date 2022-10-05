<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewerController extends Controller
{
    public function reviewer(){
        return view('reviewer.main');
    }
    public function index(){
        $Users = User::orderBy('created_at','ASC')
        ->where('role', 'applicant')
        ->get();
        return view('reviewer.datadiri.index', compact('Users'));
    }
    public function show($id){
        $data= User::find($id);
        return view('reviewer.datadiri.show', compact('data'));
    }

    public function destroy($id)
    {
        $Users = User::find($id);
        $Users->delete();
        if ($Users) {
            Session::flash('success','Sukses Delete Data');
            return redirect()->route('reviewer.datadiri.index');
        } else {
            Session::flash('success','Failed Delete Data');
            return redirect()->route('reviewer.datadiri.index');
        }
    }
}

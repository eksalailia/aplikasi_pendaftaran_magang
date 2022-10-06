<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Pendaftaran;
use File;

class AdminController extends Controller
{
    public function admin(){
        return view('admin.dashboard.main');
    }
    public function index(){
        $Users = User::orderBy('created_at','ASC')
        ->where('role', 'applicant')
        ->get();
        return view('admin.dashboard.datadiri.index', compact('Users'));

    }
    public function show($id){
        $data= User::find($id);
        return view('admin.dashboard.datadiri.show', compact('data'));
    }
    public function datatable(){
        return view('admin.table.main');
    }

    public function destroy($id)
    {
        $Users = User::find($id);
        $Users->delete();
        if ($Users) {
            Session::flash('success','Sukses Delete Data');
            return redirect()->route('applicant.datadiri.index');
        } else {
            Session::flash('success','Failed Delete Data');
            return redirect()->route('applicant.datadiri.index');
        }
    }

    public function index_daftar(){
        $pendaftaran = Pendaftaran::orderBy('created_at','ASC')
        ->where('role', 'applicant')
        ->get();
        return view('admin.dashboard.pendaftaran.index', compact('pendaftaran'));

    }
    public function show_daftar($id){
        $data= Pendaftaran::find($id);
        return view('admin.dashboard.pendaftaran.show', compact('data'));
    }

    public function destroy_daftar($id)
    {
        $pendaftaran = Pendaftaran::find($id);
        $pendaftaran->delete();
        if ( $pendaftaran) {
            Session::flash('success','Sukses Delete Data');
            return redirect()->route('applicant.pendaftaran.index');
        } else {
            Session::flash('success','Failed Delete Data');
            return redirect()->route('applicant.pendaftaran.index');
        }
    }


}

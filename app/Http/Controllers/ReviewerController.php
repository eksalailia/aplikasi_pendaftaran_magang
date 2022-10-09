<?php

namespace App\Http\Controllers;
use App\Models\Pendaftaran;
use App\Models\User;
use App\Models\Bidang;
use Illuminate\Http\Request;
use Session;

class ReviewerController extends Controller
{
    public function reviewer(){
        return view('reviewer.main');
    }
    public function index(){
        $pendaftar = Pendaftaran::orderBy('created_at','ASC')
        ->whereNotNull('resume')
        ->whereNotNull('proposal')
        ->get();
        return view('reviewer.pendaftaran.index', compact('pendaftar'));
    }
    public function show($id){
        $data= Pendaftaran::find($id);
        return view('reviewer.pendaftaran.show', compact('data'));
    }

    public function showResume($id){
        $data= Pendaftaran::find($id);
        return view('reviewer.pendaftaran.showResume', compact('data'));
    }

    public function showProposal($id){
        $data= Pendaftaran::find($id);
        return view('reviewer.pendaftaran.showProposal', compact('data'));
    }

    public function status($id){
        $data = Pendaftaran::find($id);

        $status_now = $data->status;

        if($status_now == 1) {
            Pendaftaran::find($id)->update([
                'status'=>0
            ]);
        }else{
            Pendaftaran::find($id)->update([
                'status'=>1
            ]);
        }
        Session::flash('update','Update Data Status Pendaftaran Berhasil');
        return redirect()->route('reviewer.pendaftaran.index');
    }

    public function destroy($id)
    {
        $pendaftar = Pendaftaran::find($id);
        $pendaftar->delete();
        if ($pendaftar) {
            Session::flash('success','Sukses Delete Data');
            return redirect()->route('reviewer.pendaftaran.index');
        } else {
            Session::flash('success','Failed Delete Data');
            return redirect()->route('reviewer.pendaftaran.index');
        }
    }
}

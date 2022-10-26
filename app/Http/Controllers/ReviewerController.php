<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Pendaftaran;
use App\Models\User;
use App\Models\Bidang;
use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;

class ReviewerController extends Controller
{
    public function reviewer(){
        $jumlah_pendaftar = DB::table('pendaftaran')->count();
        $pendaftar_waiting = DB::table('pendaftaran')
        ->whereNull('status')
        ->count();
        $pendaftar_lolos = DB::table('pendaftaran')
        ->where('status', 1)
        ->count();
        $pendaftar_tidaklolos = DB::table('pendaftaran')
        ->where('status', 2)
        ->count();
        $jumlah_review = DB::table('pendaftaran')->count();

        $data=Pendaftaran::select('id','created_at')->get()->groupBy(function($data){
            return Carbon::parse($data->created_at)->format('M');
        });

        $months=[];
        $monthCount=[];
        foreach($data as $month => $values){
            $months[]=$month;
            $monthCount[]=count($values);
        }

        $peserta_status=Pendaftaran::selectRaw('count(id) as total_pendaftar, status')
        ->groupBy('status')
        ->get();
        $plabels=[];
        $pdata=[];
        foreach($peserta_status as $ps){
            if($ps->status == null)
            $plabels[]="Menunggu Verifikasi";
            elseif($ps->status == 1)
            $plabels[]="Diterima";
            elseif($ps->status == 2)
            $plabels[]="Tidak Diterima";
            $pdata[]=$ps->total_pendaftar;
        }

        $status_aktivasi=User::selectRaw('count(id) as total_aktivasi, status_aktivasi')
        ->where('role', 'pendaftar')
        ->groupBy('status_aktivasi')
        ->get();
        $pplabels=[];
        $ppdata=[];
        foreach($status_aktivasi as $sa){
            if($sa->status_aktivasi == null)
            $pplabels[]="Menunggu Aktivasi";
            elseif($sa->status_aktivasi == 1)
            $pplabels[]="Aktif";
            elseif($sa->status_aktivasi == 2)
            $pplabels[]="Tidak Aktif";
            $ppdata[]=$sa->total_aktivasi;
        }

        $datas=User::select('id','tgl_aktivasi')
        ->whereNotNull('tgl_aktivasi')
        ->get()->groupBy(function($datas){
            return Carbon::parse($datas->tgl_aktivasi)->format('M');
        });

        $bulan=[];
        $monthsCount=[];
        foreach($datas as $bulans => $value){
            $bulan[]=$bulans;
            $monthsCount[]=count($value);
        }

        return view('reviewer.main', compact('jumlah_pendaftar', 'pendaftar_waiting', 'pendaftar_lolos', 'pendaftar_tidaklolos', 
                                            'jumlah_review', 'data', 'months', 'monthCount', 'datas', 'bulan', 'monthsCount', 'plabels', 
                                            'pdata', 'pplabels', 'ppdata'));
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

    // public function status($id){
    //     $data = Pendaftaran::find($id);

    //     $status_now = $data->status;

    //     if($status_now == 1) {
    //         Pendaftaran::find($id)->update([
    //             'status'=>0
    //         ]);
    //     }else{
    //         Pendaftaran::find($id)->update([
    //             'status'=>1
    //         ]);
    //     }
    //     Session::flash('update','Update Data Status Pendaftaran Berhasil');
    //     return redirect()->route('reviewer.pendaftaran.index');
    // }

    public function acc($id){
        Pendaftaran::find($id)->update([
            'status'=>1,
            'tgl_review'=> date("Y-m-d H:i:s")
        ]);
        Session::flash('update','Update Data Status Pendaftaran Berhasil');
        return redirect()->route('reviewer.pendaftaran.index');
    }

    public function notacc($id){
        Pendaftaran::find($id)->update([
            'status'=>2,
            'tgl_review'=> date("Y-m-d H:i:s")
        ]);
        Session::flash('update','Update Data Status Pendaftaran Berhasil');
        return redirect()->route('reviewer.pendaftaran.index');
    }

    public function pesertalolos() {
        $pendaftaran = Pendaftaran::orderBy('created_at','ASC')
        ->where('status', '1')
        ->get();
        return view('reviewer.pendaftaran.pesertalolos', compact('pendaftaran'));
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

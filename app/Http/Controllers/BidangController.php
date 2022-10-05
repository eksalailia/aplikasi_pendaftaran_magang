<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bidang;
use Session;

class BidangController extends Controller
{
    public function index(){
        $Bidang = bidang::orderBy('created_at','ASC')
        ->get();
        return view('admin.dashboard.bidang.index', compact('Bidang'));
    }

    public function create(){
        return view('admin.dashboard.bidang.create');
    }

    public function edit($id){
        $bidang = Bidang::find($id);
        return view('admin.dashboard.bidang.edit', compact('bidang'));
    }

    public function update(Request $request, $id)
    {
        $Bidang = Bidang::find($id);
        $Bidang->nama = $request->nama;
        $Bidang->keterangan = $request->keterangan;
        $Bidang->save();

        if ($Bidang) {
            Session::flash('update','Update Data Mentor Berhasil');
                return redirect()->route('admin.dashboard.bidang.index');
        } else {
            Session::flash('update','Update Data Mentor Berhasil');
                return redirect()->route('admin.dashboard.bidang.index');
            }
    }

    public function store(Request $request) {
        $Bidang = new Bidang;
        $Bidang->nama = $request->nama;
        $Bidang->keterangan = $request->keterangan;
        $Bidang->save();
        if ($Bidang) {
            Session::flash('success','Data Bidang Berhasil Ditambahkan');
            return redirect()->route('admin.dashboard.bidang.index');
        } else {
            Session::flash('failed','Data Mentor Gagal Ditambahkan');
            return redirect()->route('admin.dashboard.bidang.index');
        }
    }
    public function show($id){
        $data= Bidang::find($id);
        return view('admin.dashboard.bidang.show', compact('data'));
    }

    public function destroy($id)
    {
        $Bidang = Bidang::find($id);
        $Bidang->delete();
        if ($Bidang) {
            Session::flash('delete','Data Mentor Berhasil Dihapus');
            return redirect()->route('admin.dashboard.bidang.index');
        } else {
            Session::flash('failed','Data Mentor Gagal Dihapus');
            return redirect()->route('admin.dashboard.bidang.index');
        }
    }

}

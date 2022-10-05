<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KesanPesan;
use Session;

class KesanController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $kesanpesan = KesanPesan::where('nama', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $kesanpesan = KesanPesan::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('admin.dashboard.kesan.index', compact('kesanpesan'));
    }

    public function create(){
        return view('applicant.kesan.create');
    }

    public function store(Request $request) {
        $kesanpesan = new kesanpesan;
        $kesanpesan->nama = $request->nama;
        $kesanpesan->instansi = $request->instansi;
        $kesanpesan->isi = $request->isi;
        $kesanpesan->save();
        if ($kesanpesan) {
            Session::flash('success','Kesan & Pesan Anda Berhasil Terkirim');
            return redirect()->route('applicant.kesan.create');
        } else {
            Session::flash('failed','Kesan & Pesan Gagal Terkirim');
            return redirect()->route('applicant.kesan.create');
        }
    }
    public function show($id){
        $data= KesanPesan::find($id);
        return view('admin.dashboard.kesan.show', compact('data'));
    }

    public function destroy($id)
    {
        $kesanpesan = KesanPesan::find($id);
        $kesanpesan->delete();
        if ($kesanpesan) {
            Session::flash('delete','Data Kesan & Pesan Berhasil Dihapus');
            return redirect()->route('admin.dashboard.kesan.index');
        } else {
            Session::flash('failed','Data Kesan & Pesan Gagal Dihapus');
            return redirect()->route('admin.dashboard.kesan.index');
        }
    }
}

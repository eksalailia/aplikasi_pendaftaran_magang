<?php

namespace App\Http\Controllers;
use App\Models\Mentor;
use App\Models\User;
use Illuminate\Http\Request;
use Session;

class MentorController extends Controller
{
    public function index(Request $request){
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $mentor = Mentor::where('nama', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $mentor = Mentor::orderBy('id', 'desc')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('admin.dashboard.mentor.index', compact('mentor'));

    }
    public function create(){
        $mentor=User::all()
        ->where('role', 'mentor');
        $data=Mentor::all();
        $jabatan=User::all()
        ->where('role', 'mentor');
        return view('admin.dashboard.mentor.create', compact('data','mentor','jabatan'));
    }
    public function store(Request $request)
    {
        $file = $request->file('img');
        $org = $file->getClientOriginalName();
        $path = 'img';
        $file->move($path,$org);

        $Mentor = new Mentor;
        $Mentor->nama = $request->nama;
        $Mentor->jabatan = $request->jabatan;
        $Mentor->img = $org;
        $Mentor->save();
        if ($Mentor) {
            Session::flash('success','Data Mentor Berhasil Ditambahkan');
            return redirect()->route('admin.dashboard.mentor.index');
        } else {
            Session::flash('failed','Data Mentor Gagal Ditambahkan');
            return redirect()->route('admin.dashboard.mentor.index');
        }
    }

    public function edit($id){
        $data = Mentor::all();
        $mentor = Mentor::find($id);
        return view('admin.dashboard.mentor.edit',compact('data','mentor'));
    }

    public function update(Request $request, $id)
    {
        $foto = $request->file('img');
        if ($foto == "") {
            $mentor = Mentor::find($id);
            $mentor->nama = $request->nama;
            $mentor->jabatan = $request->jabatan;
            $mentor->save();

           if ($mentor) {
                Session::flash('update','Update Data Mentor Berhasil');
                return redirect()->route('admin.dashboard.mentor.index');
            } else {
                Session::flash('failed','Update Data Mentor Gagal');
                return redirect()->route('admin.dashboard.mentor.index');
            }
        } else {
            $file = $request->file('img');
            $org = $file->getClientOriginalName();
            $path = 'img';
            $file->move($path,$org);

            $mentor = Mentor::find($id) ;
            $mentor->nama = $request->nama;
            $mentor->jabatan = $request->jabatan;
            $mentor->img = $org;
            $mentor->save();
            if ($mentor) {
                Session::flash('update','Update Data Mentor Berhasil');
                return redirect()->route('admin.dashboard.mentor.index');
            } else {
                Session::flash('failed','Update Data Mentor Gagal');
                return redirect()->route('admin.dashboard.mentor.index');
            }
        }
    }

    public function show($id)
    {
        $mentor= Mentor::find($id);
        return view('admin.dashboard.mentor.show', compact('mentor'));
    }
    public function destroy($id) {
        // Alert::success('Profil Berhasi Dihapus','Sukses');
        Mentor::find($id)->delete();
        Session::flash('delete','Data Mentor Berhasil Dihapus');
        return redirect()->route('admin.dashboard.mentor.index');
    }
}


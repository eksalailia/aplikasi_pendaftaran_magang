<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Session;

class MessageController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('search')) { // Jika ingin melakukan pencarian judul
            $message = Message::where('nama', 'like', "%" . $request->search . "%")->paginate(5);
        } else { // Jika tidak melakukan pencarian judul
            //fungsi eloquent menampilkan data menggunakan pagination
            $message = Message::orderBy('id', 'DESC')->paginate(5); // Pagination menampilkan 5 data
        }
        return view('admin.dashboard.message.index', compact('message'));
    }

    public function create()
    {
        return view('layouts.frontend.message.create');
    }

    public function store(Request $request) {
        $message = new message;
        $message->nama = $request->nama;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->pesan = $request->pesan;
        $message->save();
        if ($message) {
            Session::flash('success','Saran dan Kritik Anda Berhasil Terkirim');
            return redirect()->route('layouts.frontend.message.create');
        } else {
            Session::flash('failed','Saran dan Kritik Anda Gagal Terkirim');
            return redirect()->route('layouts.frontend.message.create');
        }
    }

    public function show($id)
    {
        $message = message::find($id);
        return view('admin.dashboard.message.show', compact('message'));
    }

    public function destroy($id)
    {
        $message = message::find($id);
        $message->delete();
        if ($message) {
            Session::flash('delete','Data Saran dan Kritik Anda Berhasil Dihapus');
            return redirect()->route('admin.dashboard.message.index');
        } else {
            Session::flash('failed','Data Saran dan Kritik Anda Gagal Dihapus');
            return redirect()->route('admin.dashboard.message.index');
        }
    }

}

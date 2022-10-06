<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use File;
use Session;

class ProfileAdminController extends Controller
{
    public function index(){
        $Users = User::orderBy('created_at','ASC')
        ->get();
        return view('admin.dashboard.profile.index', compact('Users'));
    }

    public function profileupdateadmin(Request $request) {

            $user_id = Auth::user()->id;
            $user = User::findOrFail($user_id);
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->no_tlp = $request->input('no_tlp');

            if($request->hasfile('foto')) {

                $destination = 'backend/assets/uploads/profile/'.$user->foto;
                if(File::exists($destination)){
                    File::delete($destination);
                }
                $file = $request->file('foto');
                $extension= $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;
                $file->move('backend/assets/uploads/profile/', $filename);
                $user->foto = $filename;
            }

            $user->update();
            if ($user) {
                Session::flash('success','Sukses Update Data Diri');
                    return redirect()->route('admin.dashboard.profile.index');
                } else {
                    Session::flash('failed','Failed Update Data Diri');
                    return redirect()->route('admin.dashboard.profile.index');
                }
            }
    }
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MailSend;
use Illuminate\Support\Facades\Mail;
use Session;

class SendEmailController extends Controller
{
    public function index()
    {
        return view('reviewer.sendemail.formemail');
    }

    public function send(Request $request)
    {
        $file = $request->file('surat');
        $details = [
            'pesan' => $request->pesan,
            'notes' => $request->notes,
            'surat' => $file
        ];

        Mail::to($request->email)->send(new MailSend($details));

        Session::flash('success','Email berhasil terkirim');
        return redirect()->route('reviewer.sendemail.email');
    }
}

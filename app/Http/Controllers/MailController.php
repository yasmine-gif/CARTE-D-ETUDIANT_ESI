<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\mailFormRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class MailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Mail';

        return view('emails.mail', ['title'=>$title]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     * mailgun : S&m#xa/Vhk29K$G
     */
    public function sender(mailFormRequest $request)
    {
        $data = array(
            'nom' => $request->nom,
            'email' => $request->email,
            'message' => $request->message
        );

        Mail::to($data['email'])->send(new SendMail);

        return redirect()->back();
    }
}

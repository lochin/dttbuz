<?php

namespace App\Http\Controllers;

use App\Mail\ContactToAdmin;
use App\Notifications\PhoneVerification;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'bail|required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        \Mail::to('replytolochin@gmail.com')->send(new ContactToAdmin($request->all()));
        return view('contact-confirmation');
    }
}

<?php

namespace App\Http\Controllers;

use App\Mail\ContactusMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index(){
        return view('contactus');
    }

    public function sendMessage(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        if (Mail::to("clintononitsha20@gmail.com")->send(new ContactusMail($details)));

        return back()->with("success", "Your message has been successfully sent, you'll get a reply from the doctor soon. Thanks!");
    }
}

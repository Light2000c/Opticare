<?php

namespace App\Http\Controllers;

use App\Mail\SendmessageMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DoctorController extends Controller
{
    public function index()
    {
        return view('doctor');
    }

    public function sendMessage(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ];

        if (Mail::to("clintononitsha20@gmail.com")->send(new SendmessageMail($details)));

        return back()->with("success", "Your message has been successfully sent, you'll get a reply from the doctor soon. Thanks!");
    }
}

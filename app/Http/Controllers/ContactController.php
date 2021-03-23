<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use App\Events\MessageContactEvent;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('page.contact');
    }

    public function store(Request $request)
    {
        $message = $request->validate([
            'name' => "required",
            'email' => "required|email",
            'subject' => "required",
            'message' => "required",
        ]);
        
        Mail::to('stevyralambomanana@gmail.com')->send(new contactMail());

        event(new MessageContactEvent($message));

        return redirect()->back();
    }
}

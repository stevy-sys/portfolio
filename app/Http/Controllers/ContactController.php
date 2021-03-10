<?php

namespace App\Http\Controllers;

use App\Mail\contactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('page.contact');
    }

    public function store()
    {
        Mail::to('stevyralambomanana@gmail.com')->send(new contactMail());
        
        return redirect()->back();
    }
}

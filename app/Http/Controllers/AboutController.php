<?php

namespace App\Http\Controllers;

use App\Http\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('page.about',['about' => $about]);
    }
}

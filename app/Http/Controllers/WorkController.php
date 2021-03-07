<?php

namespace App\Http\Controllers;

use App\Http\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $work = Work::all();
        return view('page.work',['work' => $work]);
    }
}

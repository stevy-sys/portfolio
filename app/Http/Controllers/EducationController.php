<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Education;

class EducationController extends Controller
{
    public function index()
    {
        $education = Education::all();
        return view('page.education',['education' => $education]);
    }
}

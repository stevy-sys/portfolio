<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experience = Experience::all();
        return view('page.experience',['experience' => $experience]);
    }
}

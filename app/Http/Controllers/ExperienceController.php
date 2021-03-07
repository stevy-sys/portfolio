<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Experience;

class ExperienceController extends Controller
{
    public function index()
    {
        $experience = Experience::all();
        return view('page.experience',['experience' => $experience]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Skills;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function index()
    {
        $skills = Skills::all();
        return view('page.skills',['skills' => $skills]);
    }
}

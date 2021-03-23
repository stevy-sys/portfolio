<?php

namespace App\Http\Controllers;

use App\Http\Models\Work;
use App\Http\Models\About;
use App\Http\Models\Skills;
use App\Http\Models\Service;
use Illuminate\Http\Request;
use App\Http\Models\Education;
use App\Http\Models\Experience;

class IndexController extends Controller
{
    public function accueil()
    {
        return view('page.home');
    }

    public function about()
    {
         $about = About::all();
        return view('page.about',['about' => $about]);
    }

    public function skills()
    {
        $skills = Skills::all();
        return view('page.skills',['skills' => $skills]);
    }

    public function service()
    {
        $service = Service::all();
        return view('page.service',['service' => $service]);
    }

    public function education()
    {
        $education = Education::all();
        return view('page.education',['education' => $education]);
    }

    public function experience()
    {
        $experience = Experience::all();
        return view('page.experience',['experience' => $experience]);
    }

    public function work()
    {
        $work = Work::all();
        return view('page.work',['work' => $work]);
    }
}

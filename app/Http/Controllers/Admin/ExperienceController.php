<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Models\Experience;
use App\Http\Controllers\Controller;

class ExperienceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $experience = Experience::all();
        return view('admin.content.experience.index',compact('experience'));
    }

     public function create(Request $experience)
    {
        if($experience['id']){
            $experience = $experience['id'];
            $experience = Experience::where('id',$experience)->first();
            return view('admin.content.experience.create',compact('experience'));
        }
        return view('admin.content.experience.add');
    }

    public function update(Experience $experience , Request $request)
    {
       $data = $request->validate([
            'animate' => "required",
            'color' => "required",
            'title' => "required",
            'date' => "required",
            'content' => "required",
        ]);

        $experience->update($data);
        return redirect()->route('experience.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'animate' => "required",
            'color' => "required",
            'title' => "required",
            'date' => "required",
            'content' => "required",
        ]);
        $experience = Experience::create($data);
        return redirect()->route('experience.index');
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();
        return redirect()->route('experience.index');
    }
}

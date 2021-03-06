<?php

namespace App\Http\Controllers\Admin;

use App\Skills;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $skill = Skills::all();
        return view('admin.content.skill.index',compact('skill'));
    }

    public function create(Request $skill)
    {
        if($skill['id']){
            $skill = $skill['id'];
            $skill = Skills::where('id',$skill)->first();
            return view('admin.content.skill.create',compact('skill'));
        }
        return view('admin.content.skill.add');
    }

    public function update(Skills $skill , Request $request)
    {
       $data = $request->validate([
            'techno' => "required",
            'color' => "required",
            'pourcentage' => "required",
            'animate' => "required",
        ]);

        $skill->update($data);
        return redirect()->route('skill.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'techno' => "required",
            'color' => "required",
            'pourcentage' => "required",
            'animate' => "required",
        ]);
        $skill = Skills::create($data);
        return redirect()->route('skill.index');
    }

    public function destroy(Skills $skill)
    {
        $skill->delete();
        return redirect()->route('skill.index');
    }
}

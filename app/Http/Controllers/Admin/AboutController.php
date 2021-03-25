<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $about = About::all();
        return view('admin.content.about.index',compact('about'));
    }

    public function create(Request $about)
    {
        //dd($about);
        if($about['id']){
            $about = $about['id'];
            $about = About::where('id',$about)->first();
            return view('admin.content.about.create',compact('about'));
        }
        return view('admin.content.about.add');
    }

    public function update(About $about , Request $request)
    {
        $data = $request->validate([
            'icon' => "required",
            'animate' => "required",
            'color' => "required",
            'taille' => "required",
            'qualite' => "required",
        ]);

        $about->update($data);
        return redirect()->route('about.index');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
            'icon' => "required",
            'animate' => "required",
            'color' => "required",
            'taille' => "required",
            'qualite' => "required",
        ]);

        $blog = About::create($data);

        return redirect()->route('about.index');
    }

    public function destroy(About $about)
    {
        $about->delete();
        return redirect()->route('about.index');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Work;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $work = Work::all();
        return view('admin.content.work.index',compact('work'));
    }

    public function show(int $work)
    {
        $work = Work::find($work)->first();
        return view('admin.nav.work.show',compact('work'));
    }

    public function create(Request $id)
    {
        if($id['id']){
            $work = intval($id['id']);
            $work = Work::where('id',$work)->first();
            return view('admin.content.work.create',compact('work'));
        }
        return view('admin.content.work.add');
    }

    public function update(Work $work , Request $request)
    {
        $data = $request->validate([
            'animate' => "required",
            'img' => "required|image",
            'url_github' => "required",
            'titre' => "required",
            'type' => "required",
            'video' => "required",
        ]);

        if($work->img AND $work->video){
            $avant1 = $work->img ;
            $avant2 = $work->video ;
            unlink('storage/'.$avant1);
            unlink('storage/'.$avant2);
        }

        $work->update($data);
        $this->storeImage($work);
        $this->storeVideo($work);

        return redirect()->route('work.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'animate' => "required",
            'img' => "required|image",
            'url_github' => "required",
            'titre' => "required",
            'type' => "required",
            'video' => "required",
        ]);

        $work = Work::create($data);

        $this->storeImage($work);
        $this->storeVideo($work);

        return redirect()->route('work.index');
    }

    public function destroy(Work $work)
    {

        if($work->img AND $work->video){
            $avant1 = $work->img ;
            unlink('storage/'.$avant1);
            $avant2 = $work->video ;
            unlink('storage/'.$avant2);
            $work->delete();
        }
        return redirect()->route('work.index');
    }

    private function storeImage(Work $work)
    {
       if (request('img')) {
           $work->update([
               'img' => request('img')->store('work','public')
           ]);
       }
    }

    private function storeVideo(Work $work)
    {
       if (request('img')) {
           $work->update([
               'video' => request('video')->store('video','public')
           ]);
       }
    }
}

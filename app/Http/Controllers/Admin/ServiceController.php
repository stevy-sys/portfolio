<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Service;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $service = Service::all();
        return view('admin.content.service.index',compact('service'));
    }

    public function create(Request $service)
    {
        //dd($service);
        if($service['id']){
            $service = $service['id'];
            $service = Service::where('id',$service)->first();
            return view('admin.content.service.create',compact('service'));
        }
        return view('admin.content.service.add');
    }

    public function update(Service $service , Request $request)
    {
        $data = $request->validate([
            'color' => "required",
            'icon' => "required",
            'title' => "required",
            'content' => "required",
        ]);

        $service->update($data);
        return redirect()->route('service.index');
    }

    public function store(Request $request)
    {
       $data = $request->validate([
            'color' => "required",
            'icon' => "required",
            'title' => "required",
            'content' => "required",
        ]);

        $blog = Service::create($data);

        return redirect()->route('service.index');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('service.index');
    }
}

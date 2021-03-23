<?php

namespace App\Http\Controllers\Admin;

use App\Http\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        $blog = Blog::paginate(3);
        return view('admin.nav.blog.index',compact('blog'));
    }

    public function show(int $blog)
    {
        $article = Blog::find($blog)->first();
        return view('admin.nav.blog.show',compact('article'));
    }

    public function create(Request $id)
    {
        if($id['blog']){
            $blog = $id['blog'];
            $article = Blog::where('id',$blog)->first();
            return view('admin.nav.blog.create',compact('article'));
        }
        return view('admin.nav.blog.add');
    }

    public function update(Blog $blog , Request $request)
    {
        $data = $request->validate([
            'titre' => "required",
            'title' => "required",
            'date' => "required",
            'content' => "required",
            'animate' => "required",
            'img' => "image|max:5000"
        ]);
        $blog->update($data);
        $this->storeImage($blog);
        return redirect()->route('blog.index');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'titre' => "required",
            'title' => "required",
            'date' => "required",
            'content' => "required",
            'animate' => "required",
            'img' => "required|image|max:5000"
        ]);
        $blog = Blog::create($data);
        

        $this->storeImage($blog);

        return redirect()->route('blog.index');
    }

    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect()->route('blog.index');
    }

    private function storeImage(Blog $blog)
    {
       if (request('img')) {
           $blog->update([
               'img' => request('img')->store('blog','public')
           ]);
       }
    }
}

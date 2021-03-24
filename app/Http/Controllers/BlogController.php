<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Models\Commentaire;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::paginate(3);
        return view('page.blog',['blog' => $blog]);
    }

    public function show(Blog $blog)
    {
        $recently = Blog::all();
        /*
        dd($id);
        if (count($recently) < intval($id) OR intval($id) == 0 ) {
            return redirect('/blog');
        } else {
            $blog = Blog::find($id);
            return view('blog.index',compact('blog','recently'));
        }
        */
        return view('blog.index',compact('blog','recently'));

    }

    public function store(Request $request)
    {
        $commentaire = [
            'blog_id' => intval($request->route()->id),
            'user_id' => Auth::User()->id,
            'content' => $request->commentaire
        ];

        Commentaire::create($commentaire);
        
        return Back();
    }
}

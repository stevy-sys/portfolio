<?php

namespace App\Http\Controllers;

use App\Blog;
use App\User;
use App\Commentaire;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::paginate(3);
        return view('page.blog',['blog' => $blog]);
    }

    public function show($id)
    {
        $recently = Blog::all();
        if (count($recently) < $id) {
            return redirect('/blog');
        } else {
            $blog = $recently[$id];
            return view('blog.index',compact('blog','recently'));
        }
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

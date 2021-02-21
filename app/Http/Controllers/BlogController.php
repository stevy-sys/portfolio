<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Blog::all();
        return view('page.blog',['blog' => $blog]);
    }

    public function show($id)
    {
        //$blog = Blog::where('id',$id)->first(['img','date','titre','commentaire','title','content']);
        $recently = Blog::get(['titre','id']);
        $blog = Blog::where('id',$id)->first();
        //dd($blog);
        return view('blog.index',compact('blog','recently'));
    }
}

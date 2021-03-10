@extends('welcome',['title' => $blog->title])

@section('content')

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-default bg-white shadow-sm ml-5">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/blog') }}">
                    Bienvenue dans mon Blog
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="">Menu</span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Se connecter</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">S'enregistrer</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>


   <section style="margin-top: 50px" id="content">
      <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-4">
            <!--left-->
                <aside class="left-sidebar animate-box" data-animate-effect="fadeInLeft">
                    <div class="widget mb-5">
                        <form>
                        <div class="input-append">
                            <input class="form-control" id="appendedInputButton" type="text" placeholder="Type here">
                            <button style="margin-top: 10px" class="btn btn-info" type="submit">Search</button>
                        </div>
                        </form>
                    </div>

                    <div class="widget mb-5">
                        <h3>Categories</h3>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-cente"><a href="#">Web design</a><span class="badge bg-primary rounded-pill" > 20</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-cente"><a href="#">Web design</a><span class="badge bg-primary rounded-pill" > 20</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-cente"><a href="#">Web design</a><span class="badge bg-primary rounded-pill" > 20</span></li>
                            <li class="list-group-item d-flex justify-content-between align-items-cente"><a href="#">Web design</a><span class="badge bg-primary rounded-pill" > 20</span></li>
                        </ul>
                    </div>

                    <div class="widget mb-5">
                        <h3>Recent posts</h3>

                        <ul class="list-group">
                            @foreach ($recently as $recent)
                                <li class="list-group-item" ><a href="/blog/{{$recent->id}}">{{$recent->titre}}</a></li>   
                            @endforeach
                        </ul>
                    </div>
                </aside>
            <!--end left-->
            </div>
            <div class="col-lg-8">
            <!--right-->
                <div class="">
                    <article class="single animate-box" data-animate-effect="fadeInRight">
                        <div class="row">
                            <div class="">
                                <div class="post-image">
                                    <div class="post-heading">
                                        <h1>{{$blog->title}}</h1>
                                    </div>
                                    <img style="width: 600px" src="{{ asset('/storage/'.$blog->img) }}" alt="" />
                                </div>
                                <ul class="breadcrumb">
                                    <li href="#" class="breadcrumb-item">By Admin</li>
                                    <li href="#" class="breadcrumb-item">{{$blog->date}}</li>
                                    <li href="#" class="breadcrumb-item">dans la categorie de {{$blog->titre}}</li>
                                </ul>
                                <p>{{$blog->content}}</p>
                            </div>
                        </div>
                    </article>

                    <div class="comment-area">
                        <h2>{{count($blog->commentaire)}} Commentaires</h2>
                        <div class="row animate-box" data-animate-effect="fadeInRight">
                            @foreach ($blog->commentaire as $comment)
                                <div class="col-lg-2" ><a href="#" class="thumbnail pull-left"><img style="width: 70px" src="{{asset('images/za.jpg')}}" alt="" /></a></div> 
                                <div class="col-lg-10 marginbot30">
                                <div class="media-content">
                                    <h6><span>{{ $comment->user->name }} - </span>{{$comment->created_at}}</h6>
                                    <p>{{$comment->content}}</p>
                                </div>
                                <!--<div class="row">
                                    <div  class="col-lg-2 col-xs-4" ><a href="#" class="thumbnail pull-left"><img style="width: 70px" src="{{asset('images/za.jpg')}}" alt="" /></a></div> 
                                    <div  class="col-lg-10 col-xs-7 marginleft40">
                                        <div class="media-content">
                                            <h6><span>March 12, 2013</span> Thomas guttenberg</h6>
                                            <p>
                                                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                            </p>
                                        </div>
                                    </div>
                                </div>-->
                                </div>
                                <hr>
                            @endforeach
                        </div>
                        <br>
                        @if (Auth::check())
                        <h2>Leave your comment</h2>
                        <form id="commentform" action="#" method="post" name="comment-form">
                            @csrf
                            <div class="row">
                                <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">votre commentaire</label>
                                    <textarea name="commentaire" class="form-control" id="exampleFormControlTextarea1" cols="100" rows="10"></textarea>
                                </div>
                                <p class="">
                                    <button class="btn btn-success" type="submit">Submit comment</button>
                                </p>
                            </div>
                        </form>
                        <br><br><br>
                        <form action="/logout" method="post">
                            <button class="btn btn-danger"> Deconnexion</button>
                        </form>
                        
                        @else
                            <h1>vous devez se connecter ou sinscrire pour commenter</h1>
                            <a href="/login"><button class="btn btn-danger"> Connexion</button></a>
                            <a href="/register"><button class="btn btn-info"> Inscription</button></a>
                        @endif
                    </div>
                </div>
        <!--end right-->
            </div>
        
        </div>
      </div>
    </section>
@endsection
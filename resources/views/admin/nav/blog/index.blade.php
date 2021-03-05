@extends('layouts.admin.paneladmin')

@section('content')

  <div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-lg-6">
        <section class="py-5 text-center container">
              <h1 class="font-weight-light">BLOG</h1>
              <p>
                <a href="{{route('blog.create')}}" class="btn btn-primary my-2">Ecrire une article</a>
              </p>
        </section>
    </div>
    <div class="col-lg-3">
    </div>
  </div>
  <br><br>
  

  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3 text-center">
        @foreach ($blog as $item)
            <div class="col-lg-4">
              <div class="card shadow-sm">
                <img src="{{ asset('/storage/'.$item->img) }}" height="200vh" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com">
                <h3>{{$item->titre}}</h3>
                <div class="card-body">
                  <p class="card-text">{{$item->title}}</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button  type="button" class="btn btn-sm btn-outline-secondary"> <a href="{{ route('blog.show',['blog' => $item->id]) }}">afficher</a></button>
                      <button type="button" class="btn btn-sm btn-outline-secondary"><a href="{{ route('blog.create',['blog' => $item->id]) }}">modifier</a></button>
                    </div>
                    <small class="text-muted">{{$item->date}}</small>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
      </div>  
    </div>
  </div>
  <div class="row">
    <div class="col-lg-3">
    </div>
    <div class="col-md-6 animate-box">
      <p>{{$blog->links()}}</p>
    </div>
    <div class="col-lg-3">
    </div>
  </div>

@endsection
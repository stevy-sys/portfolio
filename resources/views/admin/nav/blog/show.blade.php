@extends('layouts.admin.paneladmin')

@section('content')
<div class="row">
    <div class="col-lg-3"></div>
    <div class="col-lg-6">
        <div class="card" >
            <img src="{{asset('/images/za.jpg')}}" width="600px" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$article->title}}</h5>
                <p class="card-text">{{$article->content}}</p>
                <a href="{{ route('blog.create',['blog' => $article->id]) }}" class="btn btn-primary">Modifier</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3"></div>
</div>
@endsection
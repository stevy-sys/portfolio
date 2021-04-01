@extends('welcome')
@section('content')
    <section class="mt-5 text-center">
        <video width="920px" controls>
            <source src="{{asset('storage').'/'.$work->video}}" poster = "{{asset('storage').'/'.$work->img}}" type="video/mp4">
            <p>Your browser doesn't support HTML5 video. Here is </p>
        </video>
        <h1>{{$work->titre}}</h1>
        <h3>{{$work->type}}</h3>
        <br>{{$work->description}}<br>
        <p></p>
    </section>
    
@endsection
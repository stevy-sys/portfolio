@extends('welcome')
@section('content')
    <section class="mt-5 text-center">
        <video width="920" controls>
            <source src="{{asset('storage').'/'.$work->video}}" type="video/mp4">
            <p>Your browser doesn't support HTML5 video. Here is </p>
        </video>
        <h1>{{$work->titre}}</h1>
        <h3>{{$work->type}}</h3>
        <br><br>
    </section>
    
@endsection
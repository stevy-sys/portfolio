@extends('welcome')
@section('content')
    <section class="mt-5 text-center">
        <video type="video/avi" src="{{ environement() ? asset('storage').'/'.$work->video : secure_asset('storage').'/'.$work->video }}" poster = "{{ environement() ? asset('storage').'/'.$work->img : secure_asset('storage').'/'.$work->img }}" width="920px" controls>
            <p>Your browser doesn't support HTML5 video. Here is </p>
        </video>
        <h1>{{$work->titre}}</h1>
        <h3>{{$work->type}}</h3>
        <br>{{$work->description}}<br>
    </section>
@endsection
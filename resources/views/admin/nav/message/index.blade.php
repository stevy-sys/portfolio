@extends('layouts.admin.paneladmin',['title' => 'Toute les messages'])

@section('content')
        <h1>Messages</h1>
        @foreach ($message as $item)
            <div class="alert alert-info" role="alert">
                <h3 class="alert-heading">{{$item->name}}</h3>
                <hr>
                <div class="row container">
                    <button class="btn btn-primary"> <a href="{{ route('message.show',['message' => $item->id ]) }}">Afficher</a> </button>
                    <button class="btn btn-danger">supprimer</button>
                </div>
            </div>
        @endforeach
@endsection
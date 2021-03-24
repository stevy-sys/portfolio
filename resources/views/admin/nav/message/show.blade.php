@extends('layouts.admin.paneladmin',['title' => 'Message - '.$message->name])

@section('content')
        <h1>Messages</h1>
        <div class=" row ">
            <div class="col-lg-6">
                <form action="{{route('message.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <input value="{{$message->name}}" type="text" class="form-control" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input value="{{$message->email}}" type="text" class="form-control" name="email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                    </div>
                </form>
            </div>
                <div class="col-lg-6">
                    <div class="alert alert-info" role="alert">
                        <h3 class="alert-heading">{{$message->name}} {{$message->email}}</h3>
                        <p>{{$message->message}}</p>
                        <hr>
                        <div class="row container">
                            <button class="btn btn-danger">supprimer</button>
                        </div>
                    </div>
                </div>
            </div>
        
@endsection
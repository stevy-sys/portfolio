@extends('layouts.admin.paneladmin',['title' => 'Toute les Formations'])

@section('content')
    <div>
        <button class="btn btn-warning"> <a href="{{ route('education.create')}}">Ajouter une education</a></button>
    </div>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>id_heading</td>
                <td>title</td>
                <td>id_collapse</td>
                <td>content</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($education as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td class="col-lg-1">{{$item->id_heading}}</td>
                    <td class="col-lg-2">{{$item->title}}</td>
                    <td class="col-lg-1">{{$item->id_collapse}}</td>
                    <td class="col-lg-6">{{$item->content}}</td>
                    <td class="col-lg-1">
                        <button class="btn btn-success"><a href="{{ route('education.create',['id' => $item->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
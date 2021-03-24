@extends('layouts.admin.paneladmin',['title' => 'toutes les projets'])

@section('content')
    <div>
        <button class="btn btn-warning"> <a href="{{ route('work.create')}}">Ajouter une projet</a></button>
    </div>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>image</td>
                <td>github</td>
                <td>animate</td>
                <td>titre</td>
                <td>type</td>
                <td>video</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($work as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td>{{$item->img}}</td>
                    <td class="col-lg-1">{{$item->url_github}}</td>
                    <td class="col-lg-2">{{$item->animate}}</td>
                    <td>{{$item->titre}}</td>
                    <td>{{$item->type}}</td>
                    <td>{{$item->video}}</td>
                    <td class="col-lg-4">
                        <button class="btn btn-success"><a href="{{ route('work.create',['id' => $item->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
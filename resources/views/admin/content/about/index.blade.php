@extends('layouts.admin.paneladmin',['title' => 'Toutes les services'])

@section('content')
    <div>
        <button class="btn btn-warning"> <a href="{{ route('about.create')}}">Ajouter une about</a></button>
    </div>
    <br><br>
    <table class="table text-center">
        <thead class="">
            <tr>
                <td>id</td>
                <td>icon</td>
                <td>animate</td>
                <td>color</td>
                <td>taille</td>
                <td>qualite</td>
                <td>action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($about as $item)
                <tr>
                    <th scope="row">{{$item->id}}</th>
                    <td class="col-lg-1">{{$item->icon}}</td>
                    <td class="col-lg-2">{{$item->animate}}</td>
                    <td class="col-lg-1">{{$item->color}}</td>
                    <td class="col-lg-1">{{$item->taille}}</td>
                    <td class="col-lg-6">{{$item->qualite}}</td>
                    <td class="col-lg-1">
                        <button class="btn btn-success"><a href="{{ route('about.create',['id' => $item->id]) }}">modifier</a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
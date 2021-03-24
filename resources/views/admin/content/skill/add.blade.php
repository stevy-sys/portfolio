@extends('layouts.admin.paneladmin',['title' => 'Ajouter une competences'])

@section('content')
    <form action="{{route('skill.store') }}" method="post">
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">techno</label>
            <input name="techno" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">color</label>
            <select class="form-control" name="color" id="">
                    <option value="1">1</option>    
                    <option value="2">2</option>    
                    <option value="3">3</option>    
                    <option value="4">4</option>    
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">pourcentage</label>
            <input name="pourcentage" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">animate</label>
            <select class="form-control" name="animate" id="">
                    <option value="fadeInLeft">a partir de gauche</option>    
                    <option value="fadeInRight">a partir de droite</option>    
                    <option value="fadeInBottom">a partir de bas</option>    
                    <option value="fadeInTop">a partir de haut</option>    
            </select>
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="ajouter le competence">
        </div>
    </form>
    <br>
@endsection
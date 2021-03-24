@extends('layouts.admin.paneladmin',['title' => 'ajouter une article'])

@section('content')
<form action="{{route('work.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">animate</label>
        <select class="form-control" name="animate" id="">
                <option value="fadeInLeft">a partir de gauche</option>    
                <option value="fadeInRight">a partir de droite</option>    
                <option value="fadeInBottom">a partir de bas</option>    
                <option value="fadeInTop">a partir de haut</option>    
        </select>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">github</label>
      <input name="url_github" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">titre</label>
      <input name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">type</label>
      <input name="type" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <br>
    <br>
    <div class="form-file">
        <label for="exampleFormControlInput1" class="form-label">image</label>
        <input type="file" name="img" class="form-file-input" id="customFile">
    </div>
    <br>
    <div class="form-file">
        <label for="exampleFormControlInput1" class="form-label">Video</label>
        <input type="file" name="video" class="form-file-input" id="customFile">
    </div>
    <br>
    <div class="margin-top-5">
        <input type="submit" class="btn btn-primary mt-5" value="creer la publication">
    </div>
</form>

@endsection
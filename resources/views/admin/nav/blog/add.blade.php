@extends('layouts.admin.paneladmin',['title' => 'ajouter une article'])

@section('content')
<form action="{{route('blog.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">titre</label>
      <input name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">title</label>
      <input name="title" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">date</label>
      <input name="date" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
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
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">content</label>
      <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <br>
    <br>
    <div class="form-file">
        <input type="file" name="img" class="form-file-input" id="customFile">
      </div>
    <br>
    <div class="margin-top-5">
        <input type="submit" class="btn btn-primary mt-5" value="creer la publication">
    </div>
</form>

@endsection
@extends('layouts.admin.paneladmin',['title' => 'Modification - '])

@section('content')
<form action="{{route('work.update',['work' => $work->id]) }}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf


     <section class="mb-5 mt-5 text-center">
        <video width="720" controls>
            <source src="{{ environement() ? asset('storage').'/'.$work->video : secure_asset('storage').'/'.$work->video}}" type="video/mp4">
        </video>
        <br><br>
        <img src="{{ environement() ? asset('storage').'/'.$work->img : secure_asset('storage').'/'.$work->img}}" width="300px" alt="">
    </section>


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
      <input value="{{$work->url_github}}" name="url_github" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">titre</label>
      <input value="{{$work->titre}}" name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">type</label>
      <input value="{{$work->type}}" name="type" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">description</label>
      <textarea name="description" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">{{$work->description}}</textarea>
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
        <input type="submit" class="btn btn-primary mt-5" value="modifier la publication">
    </div>
</form>
<form action="{{route('work.destroy',['work' => $work->id]) }}" method="post">
  @csrf
  @method('DELETE')
  <input type="submit" class="btn btn-danger mt-5" value="supprimer la publication">
</form>

@endsection
@extends('layouts.admin.paneladmin',['title' => 'Modification - '.$article->title])

@section('content')
<form action="{{route('blog.update',['blog' => $article->id]) }}" method="post" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <div class="mb-3">
      <img src="{{ asset('storage/'.$article->img) }}" width="400px" alt="">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">titre</label>
      <input value="{{$article->titre}}" name="titre" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">title</label>
      <input value="{{$article->title}}" name="title" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">date</label>
      <input value="{{$article->date}}" name="date" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
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
      <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$article->content}}</textarea>
    </div>
    <br><br>
    <div class="form-file">
        <input value="{{$article->img}}" type="file" name="img" class="form-file-input" id="customFile">
    </div>
    <br>
    <div>
        <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
    </div>
</form>
<br>
<form action="{{route('blog.destroy',['blog' => $article->id]) }}" method="post">
  @csrf
  @method('DELETE')
  <input type="submit" class="btn btn-danger mt-5" value="supprimer la publication">
</form>

@endsection
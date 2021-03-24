@extends('layouts.admin.paneladmin',['title' => 'Modifier la formation'])

@section('content')
    <form action="{{route('education.update',['education' => $education->id]) }}" method="post">
    @method('PATCH')
    @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">title</label>
            <input value="{{$education->title}}" name="title" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$education->content}}</textarea>
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="appliquez la modification">
        </div>
    </form>
    <br>
    <form action="{{route('education.destroy',['education' => $education->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-danger mt-5" value="supprimer l'education">
    </form>
@endsection
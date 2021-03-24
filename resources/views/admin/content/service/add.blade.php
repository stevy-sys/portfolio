@extends('layouts.admin.paneladmin',['title' => 'Ajouter une service'])

@section('content')
    <form action="{{route('service.store') }}" method="post">
    @csrf
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
            <label for="exampleFormControlInput1" class="form-label">icon</label>
            <select class="form-control" name="icon" id="">
                    <option value="bulb">bulb</option>    
                    <option value="globe-outline">globe-outline</option>    
                    <option value="data">data</option>    
                    <option value="phone3">phone3</option>    
            </select>
        </div>

        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">titre</label>
            <input name="title" type="texte" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">content</label>
            <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <br><br><br>
        <div>
            <input type="submit" class="btn btn-primary mt-5" value="ajouter le service">
        </div>
    </form>
    <br>
@endsection
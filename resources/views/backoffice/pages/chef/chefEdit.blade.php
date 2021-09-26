@extends('backoffice.template.mainBack')

@section('baka')

    <section class="container bg-dark rounded text-white py-5">
        <form class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('chefs.update', $chef->id) }}" method="post">
            @csrf
            @method('PUT')


    <div>
    <h3>Chef</h3>
        <label for="photo_chef">Photo Chef : </label>
        <input type="file" value="{{$chef->photo_chef}}" name="photo_chef" id="photo_chef">
        
        <label for="nom_chef">Nom du Chef : </label>
        <input name="nom_chef" id="nom_chef" value="{{ $chef->nom_chef }}">
    </div>
            <button class="btn btn-success w-25 mt-3" type="submit">Modifier</button>
        </form>
    </section>

@endsection

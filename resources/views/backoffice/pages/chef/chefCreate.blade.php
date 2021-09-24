@extends('backoffice.template.mainBack')

@section('baka')

<section class="container">

    @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form class="container d-flex flex-column w-75" action="{{route('chefs.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <label for="nom_chef">Nom : </label>
        <input type="text" value="{{old('nom_chef')}}" name="nom_chef" id="nom_chef">

        <label for="photo_chef">Photo du Chef</label>
        <input type="file" name="photo_chef" id="photo_chef" value="{{old('photo_chef')}}">

        <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
    </form>
</section>

@endsection
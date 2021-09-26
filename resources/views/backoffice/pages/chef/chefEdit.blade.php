@extends('backoffice.template.mainBack')

@section('baka')


<h2 class="page-section-heading text-center text-uppercase py-5">Modifiez Chef</h2>

    <section class="container rounded text-white py-5 ">

        @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <form id="chefo" class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('chefs.update', $chef->id) }}" method="post">
            @csrf
            @method('PUT')


    <div>
    <h3 class="text-dark">Chef</h3>
        <label class="text-dark" for="photo_chef">Photo Chef : </label>
        <input class="text-dark" type="file" value="{{$chef->photo_chef}}" name="photo_chef" id="photo_chef">
        
        <label class="text-dark" for="nom_chef">Nom du Chef : </label>
        <input name="nom_chef" id="nom_chef" value="{{ $chef->nom_chef }}">
    </div>
            <button class="btn btn-success w-25 mt-3 text-dark" type="submit">Modifier</button>
        </form>
    </section>

@endsection

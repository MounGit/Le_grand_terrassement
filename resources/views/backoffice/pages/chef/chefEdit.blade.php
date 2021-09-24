@extends('backoffice.template.mainBack')

@section('baka')

    <section class="container bg-dark rounded text-white py-5">
        <form class="d-flex flex-column w-75" enctype="multipart/form-data" action="{{ route('chefUpdate', $chef->id) }}" method="post">
            @csrf
            @method('PUT')


    <div>
    <h3>Chef</h3>
        <label for="photo1">Photo Chef : </label>
        <input type="file">
        <label for="chef1">Nom du Chef : </label>
        <textarea name="chef1" id="chef1" cols="30" rows="4">{{ $chef->chef1 }}</textarea>
    </div>

            <button class="btn btn-success w-25 mt-3" type="submit">Modifier</button>
        </form>
    </section>

@endsection

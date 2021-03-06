@extends('backoffice.template.mainBack')

@section('baka')

<section class="container">

    <div class="card" style="width: 18rem;">
        <img src="{{asset('img/'.$chef->photo_chef)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$chef->nom_chef}}</h5>
          <div class="d-flex justify-content-center mb-5">
            <a class="btn btn-warning mx-2" href="{{route('chefs.edit', $chef->id)}}">Modifier</a>
            <form action="{{route('chefs.destroy', $chef->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
            </form>
        </div>
        </div>
    </div>

</section>

@endsection
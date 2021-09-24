@extends('backoffice.template.mainBack')

@section('baka')

<section class="container">

    <div class="card" style="width: 18rem;">
        <img src="{{asset('img/'.$customer->url)}}" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title">{{$customer->name}} {{$customer->firstname}}</h5>
          <p class="card-text">Commentaire : </p>
          <p class="card-text">{{$customer->comment}}</p>
          <div class="d-flex justify-content-center mb-5">
            <a class="btn btn-warning mx-2" href="{{route('customers.edit', $customer->id)}}">Modifier</a>
            <form action="{{route('customers.destroy', $customer->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
            </form>
        </div>
        </div>
    </div>

</section>

@endsection
@extends('backoffice.template.mainBack')

@section('baka')

<section class="container">

    <div class="card" style="width: 18rem;">
        <h1>{{$user->name}}</h1>
        <div class="card-body">
        <h2 class="card-title">{{$user->email}}</h2>
        <h2 class="card-title">{{$user->password}}</h2>
        <h3 class="card-litle">{{$user->role_id}}</h3>
          <div class="d-flex justify-content-center mb-5">
            <a class="btn btn-warning mx-2" href="{{route('users.edit', $user->id)}}">Modifier</a>
            <form action="{{route('users.destroy', $user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
            </form>
        </div>
        </div>
    </div>

</section>

@endsection
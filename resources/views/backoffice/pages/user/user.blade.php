@extends('backoffice.template.mainBack')

@section('baka')

<section class="container">


    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <div class="container d-flex justify-content-center">
        <a class="btn btn-success mt-3 mb-5 fs-4" href="{{route('users.create')}}">Ajouter un utilisateur</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Password</th>
                <th scope="col">Role</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($user as $data)
            <tr>
                <th scope="row">{{$data->name}}</th>
                <td>{{$data->email}}</td>
                <td>{{$data->password}}</td>
                <td>{{$data->role_id}}</td>
                <td>
                <div class="d-flex justify-content-around my-3">
                                <a class="btn btn-primary text-black" href="{{route('users.show', $data->id)}}">Détails</a>
                                <a class="btn btn-warning" href="{{route('users.edit', $data->id)}}">Modifier</a>
                                <form action="{{route('users.destroy', $data->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger text-black" type="submit">Supprimer</button>
                                </form>
                            </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>

@endsection
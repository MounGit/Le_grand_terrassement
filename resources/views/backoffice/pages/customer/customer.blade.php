@extends('backoffice.template.mainBack')

@section('baka')
<h2 class="page-section-heading text-center text-uppercase py-5">commentaires clients</h2>

<section class="container pb-5">


    @if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
    @endif

    <div class="container d-flex justify-content-center">
        <a class="btn btn-success mt-3 mb-5 fs-4" href="{{route('customers.create')}}">Ajouter un commentaire client</a>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Commentaire</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach($customer as $data)
            <tr>
                <th scope="row">{{$data->id}}</th>
                <td>{{$data->name}} {{$data->firstname}}</td>
                <td>{{$data->comment}}</td>
                <td>
                <div class="d-flex justify-content-around my-3">
                                <a class="btn btn-primary text-black" href="{{route('customers.show', $data->id)}}">Détails</a>
                                <a class="btn btn-warning mx-2" href="{{route('customers.edit', $data->id)}}">Modifier</a>
                                <form action="{{route('customers.destroy', $data->id)}}" method="post">
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
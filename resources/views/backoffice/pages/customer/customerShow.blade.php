@extends('backoffice.template.mainBack')

@section('baka')
<h2 class="page-section-heading text-center text-uppercase py-5">Commentaire <i>{{$customer->name}} {{$customer->firstname}}</i></h2>

    <section class="container py-5">
        
        <div class="d-flex justify-content-center">
            <div class="card my-5" style="width: 18rem;">
                <img src="{{ asset('img/' . $customer->url) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $customer->name }} {{ $customer->firstname }}</h5>
                    <p class="card-text">Commentaire : </p>
                    <p class="card-text">{{ $customer->comment }}</p>
                    <div class="d-flex justify-content-center mb-5">
                        <a class="btn btn-warning mx-2" href="{{ route('customers.edit', $customer->id) }}">Modifier</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger text-black mx-2" type="submit">Supprimer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

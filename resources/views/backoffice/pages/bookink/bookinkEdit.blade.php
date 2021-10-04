@extends('backoffice.template.mainBack')

@section('baka')
<h2 class="page-section-heading text-center text-uppercase py-5">Modifiez les informations générales</h2>

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
        <form class="container d-flex flex-column w-75 pb-5" action="{{ route('bookinks.update', $bookink->id) }}"
            method="post">
            @csrf
            @method('PUT')

            {{-- <label class="my-3" for="title">Titre : </label>
            <div class="d-flex">
            <input type="text" value="{{$bookink->title1}}" name="title1" id="title">
            <input type="text" value="{{$bookink->title2}}" name="title2" id="title">
            <input type="text" value="{{$bookink->title3}}" name="title3" id="title">
            </div>

            <label class="my-3" for="subtitle">Sous-titre : </label>
            <input type="text" value="{{$bookink->subtitle}}" name="subtitle" id="title"> --}}


            <label class="my-3" for="adress">Adresse : </label>
            <input type="text" value="{{ $bookink->adress1 }}" name="adress1" id="adress">
            <input class="my-2" type="text" value="{{ $bookink->adress2 }}" name="adress2" id="">
            <input type="text" value="{{ $bookink->adress3 }}" name="adress3" id="">
            
            <label class="my-3" for="phone">Numéro de téléphone : </label>
            <input type="text" value="{{ $bookink->phone }}" name="phone" id="phone">
            
            <label class="my-3" for="">Horaires de la semaine</label>
            <div class="d-flex flex-column container">
                <label for="mday">Lundi : </label>
                <input value="{{ $bookink->mday }}" type="text" name="mday" id="mday">

                <label for="tuday">Mardi : </label>
                <input value="{{ $bookink->tuday }}" type="text" name="tuday" id="tuday">
                
                <label for="wday">Mercredi : </label>
                <input value="{{ $bookink->wday }}" type="text" name="wday" id="wday">
                
                <label for="thday">Jeudi : </label>
                <input value="{{ $bookink->thday }}" type="text" name="thday" id="thday">

                <label for="fday">Vendredi : </label>
                <input value="{{$bookink->fday}}" type="text" name="fday" id="fday">

                
                <label for="satday">Samedi : </label>
                <input value="{{$bookink->satday}}" type="text" name="satday" id="satday">

                
                <label for="sunday">Dimanche : </label>
                <input value="{{$bookink->sunday}}" type="text" name="sunday" id="sunday">
            </div>

            <button class="btn btn-success w-25 mt-5" type="submit">Modifier</button>
        </form>
    </section>

@endsection

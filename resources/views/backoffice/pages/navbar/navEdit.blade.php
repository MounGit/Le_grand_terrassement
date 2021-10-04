@extends('backoffice.template.mainBack')

@section('baka')
<h2 class="page-section-heading text-center text-uppercase py-5">Modifiez la barre de navigation</h2>

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
        <form class="container d-flex flex-column w-75 pb-5" action="{{ route('navUpdate', $nav->id) }}"
            method="post">
            @csrf
            @method('PUT')

            <label class="my-3" for="name">Nom : </label>
            <div class="d-flex">
            <input type="text" value="{{$nav->name1}}" name="name1" id="name">
            <input type="text" value="{{$nav->name2}}" name="name2" id="">
            </div>

            <label class="my-3" for="">Nom des différentes sections :</label>
            <div class="d-flex flex-column container">
                <label for="sect1">Section 1 : </label>
                <input value="{{ $nav->section1 }}" type="text" name="section1" id="sect1">

                <label for="sect2">Section 2 : </label>
                <input value="{{ $nav->section2 }}" type="text" name="section2" id="sect2">
                
                <label for="sect3">Section 3 : </label>
                <input value="{{ $nav->section3 }}" type="text" name="section3" id="sect3">
                
                <label for="sect4">Section 4 : </label>
                <input value="{{ $nav->section4 }}" type="text" name="section4" id="sect4">

                <label for="sect5">Section 5 : </label>
                <input value="{{$nav->section5}}" type="text" name="section5" id="sect5">
            </div>
            

            <button class="btn btn-success w-25 mt-5" type="submit">Modifier</button>
        </form>
    </section>

@endsection

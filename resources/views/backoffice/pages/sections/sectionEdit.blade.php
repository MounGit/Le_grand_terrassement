@extends('backoffice.template.mainBack')

@section('baka')
    <h2 class="page-section-heading text-center text-uppercase py-5">Modifiez le style des différentes sections</h2>

    <section class="container py-5">
        @if ($errors->any())
        <div class="container alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form enctype="multipart/form-data" class="container d-flex flex-column w-75 pb-5" action="{{route('sectionUpdate', $section->id)}}" method="post">
        @csrf
        @method('PUT')

        <label class="my-2" for="video">Lien de la vidéo : </label>
        <input value="{{$section->video}}" type="text" name="video" id="video">

        <label class="my-2" for="logo">Logo : </label>
        <input value="{{$section->logo}}"type="file" name="logo" id="logo">

        <label class="my-3 fw-bold" for="sect1">Première section</label>
        <div class="d-flex flex-column container">
            <label class="my-2" for="title1">Titre : </label>
            <input value="{{$section->sect1_title}}" type="text" name="sect1_title" id="title1">

            <label class="my-2" for="subtitle1">Sous-titre : </label>
            <input value="{{$section->sect1_subtitle}}" type="text" name="sect1_subtitle" id="subtitle1">

            <label class="my-2" for="bg1">Image en arrière-plan : </label>
            <input value="{{$section->sect1_bg}}" type="file" name="sect1_bg" id="bg1">
        </div>

        <label class="my-3 fw-bold" for="sect2">Deuxième section</label>
        <div class="d-flex flex-column container">
            <label class="my-2" for="title2">Titre : </label>
            <input value="{{$section->sect2_title}}" type="text" name="sect2_title" id="title2">

            <label class="my-2" for="subtitle2">Sous-titre : </label>
            <input value="{{$section->sect2_subtitle}}" type="text" name="sect2_subtitle" id="subtitle2">

            <label class="my-2" for="bg2">Image en arrière-plan : </label>
            <input value="{{$section->sect2_bg}}"type="file" name="sect2_bg" id="bg2">
        </div>

        <label class="my-3 fw-bold" for="sect3">Troisième section</label>
        <div class="d-flex flex-column container">
            <label class="my-2" for="title3">Titre : </label>
            <input value="{{$section->sect3_title}}" type="text" name="sect3_title" id="title3">

            <label class="my-2" for="subtitle3">Sous-titre : </label>
            <input value="{{$section->sect3_subtitle}}" type="text" name="sect3_subtitle" id="subtitle3">

            <label class="my-2" for="bg3">Image en arrière-plan : </label>
            <input value="{{$section->sect3_bg}}" type="file" name="sect3_bg" id="bg3">
        </div>


        <label class="my-3 fw-bold" for="sect4">Quatrième section</label>
        <div class="d-flex flex-column container">
            <label class="my-2" for="title4">Titre : </label>
            <input value="{{$section->sect4_title}}" type="text" name="sect4_title" id="title4">

            <label class="my-2" for="subtitle4">Sous-titre : </label>
            <input value="{{$section->sect4_subtitle}}" type="text" name="sect4_subtitle" id="subtitle4">

            <label class="my-2" for="bg4">Image en arrière-plan : </label>
            <input value="{{$section->sect4_bg}}" type="file" name="sect4_bg" id="bg4">
        </div>

        <button class="btn btn-success w-25 mt-5" type="submit">Modifier</button>
    </form>

    </section>
@endsection
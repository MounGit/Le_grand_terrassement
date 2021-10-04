@extends('backoffice.template.mainBack')

@section('baka')
    <h2 class="page-section-heading text-center text-uppercase py-5">Style des différentes sections</h2>

    <section class="container py-5">

          <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('sectionEdit', $section[0]->id) }}" class="btn btn-success">Modifer</a>
        </div>
        
    <div class="d-flex flex-column text-center my-5">
        <div class="my-3">
            <h2>Première section </h2>
            <h3 class="my-3">{{ $section[0]->sect1_title }}</h3>
            <p>{{ $section[0]->sect1_subtitle }}</p>
            <div class="d-flex justify-content-center">
                <img src="{{asset("img/" . $section[0]->sect1_bg)}}" style="width: 25rem; height: 18rem" alt="image header">
            </div>
        </div>
        
        <hr class="thin container">
        
        <div class="my-3">
            <h2>Deuxième section </h2>
            <h3 class="my-3">{{ $section[0]->sect2_title }}</h3>
            <p>{{ $section[0]->sect2_subtitle }}</p>
            <div class="d-flex justify-content-center">
                <img src="{{asset("img/" . $section[0]->sect2_bg)}}" style="width: 25rem; height: 18rem" alt="image header">
            </div>
        </div>
        
        <hr class="thin container">
        
        <div class="my-3">
            <h2>Troisième section </h2>
            <h3 class="my-3">{{ $section[0]->sect3_title }}</h3>
            <p>{{ $section[0]->sect3_subtitle }}</p>
            <div class="d-flex justify-content-center">
                <img src="{{asset("img/" . $section[0]->sect3_bg)}}" style="width: 25rem; height: 18rem" alt="image header">
            </div>
        </div>
        
        <hr class="thin container">
        
        <div class="my-3">
            <h2>Quatrième section </h2>
            <h3 class="my-3">{{ $section[0]->sect4_title }}</h3>
            <p>{{ $section[0]->sect4_subtitle }}</p>
            <div class="d-flex justify-content-center">
                <img src="{{asset("img/" . $section[0]->sect4_bg)}}" style="width: 25rem; height: 18rem" alt="image header">
            </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('sectionEdit', $section[0]->id) }}" class="btn btn-success">Modifer</a>
        </div>
        
    </div>
    </section>
@endsection





{{-- @extends('backoffice.template.mainback')

@section('title')
    Titres et descriptions des différentes sections
@endsection


@section('content')

    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('titreEdit', $titre[0]->id) }}" class="btn btn-success">Modifer les sections</a>
    </div>


    <div class="d-flex flex-column text-center my-5">
        <div class="my-3">
            <h2>Première section </h2>
            <h3 class="my-3">{{ $titre[0]->titreheader }}</h3>
            <p>{{ $titre[0]->sous_titreheader }}</p>
            <p class="btn btn-primary">{{ $titre[0]->boutonheader }}</p>
            <div class="d-flex justify-content-center">
                <img src="{{asset("img/" . $titre[0]->url)}}" style="width: 25rem; height: 18rem" alt="image header">
            </div>
        </div>
        
        <hr class="thin container">
        
        <div class="my-3">
            <h2>Deuxième section </h2>
            <h3 class="my-3">{{ $titre[0]->titreabout }}</h3>
            <p>{{ $titre[0]->sous_titreabout }}</p>
            <p class="btn btn-primary">{{ $titre[0]->boutonabout }}</p>
        </div>
        
        <hr class="thin container">
        
        <div class="my-3">
            <h2>Troisième section </h2>
            <h3 class="my-3">{{ $titre[0]->titrefeatures }}</h3>
            <p>{{ $titre[0]->sous_titrefeatures }}</p>
        </div>
        
        <hr class="thin container">
        
        <div class="my-3">
            <h2>Quatrième section </h2>
            <h3 class="my-3">{{ $titre[0]->titreservice }}</h3>
            <p>{{ $titre[0]->sous_titreservice }}</p>
        </div>
        
        <hr class="thin container">
        
        <div class="my-3">
            <h2>Cinquième section </h2>
            <h3 class="my-3">{{ $titre[0]->titreportfolio }}</h3>
            <p>{{ $titre[0]->sous_titreportfolio }}</p>
        </div>
        
        <hr class="thin container">
        
        <div class="my-3">
            <h2>Sixième section </h2>
            <h3 class="my-3">{{ $titre[0]->titretestimonials }}</h3>
            <p>{{ $titre[0]->sous_titretestimonials }}</p>
        </div>
        
        <hr class="thin container">
        
        <div class="my-3">
            <h2>Septième section </h2>
            <h3 class="my-3">{{ $titre[0]->titreteam }}</h3>
            <p>{{ $titre[0]->sous_titreteam }}</p>
        </div>
        
        <hr class="thin container">
        
        <div class="mt-3">
            <h2>Huitième section </h2>
            <h3 class="my-3">{{ $titre[0]->titrecontact }}</h3>
            <p>{{ $titre[0]->sous_titrecontact }}</p>
        </div>
    
    </div>
    <div class="d-flex justify-content-center mt-4 mb-5">
        <a href="{{ route('titreEdit', $titre[0]->id) }}" class="btn btn-success">Modifer les sections</a>
    </div>
@endsection --}}

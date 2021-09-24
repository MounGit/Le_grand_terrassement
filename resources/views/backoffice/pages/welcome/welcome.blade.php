@extends('backoffice.template.mainBack')

@section('baka')
<h2 class="page-section-heading text-center text-uppercase py-5">informations introduction</h2>

<section class="container py-5">
    <div class="">
        <div class="container d-flex justify-content-around">
            <div class="col-md-5 col-md-offset-1">
                <h2 class="mb50">About <span class="theme-accent-color">DuJour</span></h2>
            <p class="lead">{{$welcome[0]->about_part1}}</p>
                <p>{{$welcome[0]->about_part2}}</p>
            </div>

            <div class="col-md-5">
                <h2 class="mb50">Latest <span class="theme-accent-color">Awards</span></h2>
                <p class="lead">{{$welcome[0]->award_part1}}</p>
                <p>{{$welcome[0]->award_part2}}</p>
            </div>
        </div>

    </div>
    <div class="d-flex justify-content-center mt-4">
    <a href="{{route('welcomeEdit', $welcome[0]->id)}}" class="btn btn-success">Modifer</a>
    </div>
</section>

@endsection
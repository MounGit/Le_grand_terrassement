@extends('backoffice.template.mainBack')

@section('baka')
<h2 class="page-section-heading text-center text-uppercase py-5">Informations générales</h2>

<section class="container py-5">
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading">{{ $bookink[0]->title1 }} <span
                            class="theme-accent-color">{{ $bookink[0]->title2 }}</span> {{ $bookink[0]->title3 }}
                    </h2>
                    <h3 class="section-subheading secondary-font">{{ $bookink[0]->subtitle }}</h3>
                </div>
            </div>
        </div>
        <hr class="thin-hr my-4">
        <div class="row mb100">
            <!-- Address, Phone & Email -->
            <div class="col-md-5 col-md-offset-1 col-sm-5 wow fadeIn">
                <h3 class="mb30 mb-3">Coordonnées</h3>
                <p class="lead">{{$bookink[0]->adress1}}</p>
                <p class="lead">{{$bookink[0]->adress2}}<br>
                    {{$bookink[0]->adress3}} </p>
                <p class="lead">{{$bookink[0]->phone}}<br>
            </div>

            <div class="col-md-5 col-sm-7 wow fadeIn">
                <h3 class="mb30 mb-3">Horaires</h3>
                <div class="d-flex justify-content-between">
                    <div class="">
                        <ul class="list-unstyled weekdays">
                            <li>Monday</li>
                            <li>Tuesday</li>
                            <li>Wednesday</li>
                            <li>Thursday</li>
                            <li>Friday</li>
                            <li>Saturday</li>
                            <li>Sunday</li>
                        </ul>
                    </div>
                    <div class="">
                        <ul class="list-unstyled">
                            <li>{{$bookink[0]->mday}}</li>
                            <li>{{$bookink[0]->tuday}}</li>
                            <li>{{$bookink[0]->wday}}</li>
                            <li>{{$bookink[0]->thday}}</li>
                            <li>{{$bookink[0]->fday}}</li>
                            <li>{{$bookink[0]->satday}}</li>
                            <li>{{$bookink[0]->sunday}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <a href="{{route('bookinks.edit', $bookink[0]->id)}}" class="btn btn-success">Modifer</a>
        </div>
</section>

@endsection
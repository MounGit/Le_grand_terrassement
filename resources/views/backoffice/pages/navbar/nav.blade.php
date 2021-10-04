@extends('backoffice.template.mainBack')

@section('baka')
    <h2 class="page-section-heading text-center text-uppercase py-5">Navigation</h2>

    <section class="container py-5">


        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="d-flex justify-content-around mb-5">
            <p class="fw-bold fs-4">{{ $nav[0]->name1 }} <span class="text-danger">{{ $nav[0]->name2 }}</span></p>
            <p class="fw-bold fs-4">{{ $nav[0]->section1 }}</p>
            <p class="fw-bold fs-4">{{ $nav[0]->section2 }}</p>
            <p class="fw-bold fs-4">{{ $nav[0]->section3 }}</p>
            <p class="fw-bold fs-4">{{ $nav[0]->section4 }}</p>
            <p class="fw-bold fs-4">{{ $nav[0]->section5 }}</p>
        </div>
        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('navEdit', $nav[0]->id) }}" class="btn btn-success">Modifer</a>
        </div>
    </section>
@endsection

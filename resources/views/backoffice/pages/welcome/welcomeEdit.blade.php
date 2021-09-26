@extends('backoffice.template.mainBack')

@section('baka')
<div class=""></div>
<h2 class="page-section-heading text-center text-uppercase py-5">Modifiez les informations</h2>
<section class="container ">
        <form class="container d-flex flex-column w-75" action="{{ route('welcomeUpdate', $welcome->id) }}" method="post">
            @csrf
            @method('PUT')

            <label class="my-2" for="about1">Description about première partie : </label>
            <textarea name="about_part1" id="about1" cols="30" rows="3">{{ $welcome->about_part1 }}</textarea>

            <label class="my-2" for="about2">Description about deuxième partie : </label>
            <textarea name="about_part2" id="about2" cols="30" rows="3">{{ $welcome->about_part2 }}</textarea>

            <label class="my-2" for="award1">Description award première partie : </label>
            <textarea name="award_part1" id="award1" cols="30" rows="3">{{ $welcome->award_part1 }}</textarea>

            <label class="my-2" for="award2">Description award deuxième partie : </label>
            <textarea name="award_part2" id="award2" cols="30" rows="3">{{ $welcome->award_part2 }}</textarea>

            <button class="btn btn-success w-25 mt-3" type="submit">Modifier</button>
        </form>
    </section>

@endsection

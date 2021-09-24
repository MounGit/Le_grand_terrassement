@extends('backoffice.template.mainBack')

@section('baka')

    <section class="container bg-dark rounded text-white py-5">
        <form class="d-flex flex-column w-75" action="{{ route('welcomeUpdate', $welcome->id) }}" method="post">
            @csr
            @method('PUT')

            <label for="about1">Description about première partie : </label>
            <textarea name="about_part1" id="about1" cols="30" rows="4">{{ $welcome->about_part1 }}</textarea>

            <label for="about2">Description about deuxième partie : </label>
            <textarea name="about_part2" id="about2" cols="30" rows="4">{{ $welcome->about_part2 }}</textarea>

            <label for="award1">Description award première partie : </label>
            <textarea name="award_part2" id="award2" cols="30" rows="4">{{ $welcome->award_part1 }}</textarea>

            <label for="award2">Description award deuxième partie : </label>
            <textarea name="award_part2" id="award2" cols="30" rows="4">{{ $welcome->award_part2 }}</textarea>

            <button class="btn btn-success w-25 mt-3" type="submit">Modifier</button>
        </form>
    </section>

@endsection

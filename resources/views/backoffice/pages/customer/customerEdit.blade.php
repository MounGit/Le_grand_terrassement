@extends('backoffice.template.mainBack')

@section('baka')

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

    <form class="container d-flex flex-column w-75" action="{{route('customers.update', $customer->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nom : </label>
        <input type="text" value="{{$customer->name}}" name="name" id="name">

        <label for="firstname">Prénom : </label>
        <input type="text" value="{{$customer->firstname}}" name="firstname" id="firstname">

        <label for="comment">Commentaire : </label>
        <textarea name="comment" id="comment" cols="30" rows="4">{{$customer->comment}}</textarea>
        {{-- @php
            $a=0;
        @endphp --}}
        <label for="grade">Note : </label>
        <select class="form-select" name="grade" id="grade" aria-label="Default select example">
  
        <option selected>
            {{-- @php
                while ($a != $customer->grade) {
                    return "<p>yooow</p>";
                }
            @endphp --}}
        </option>
            <option value="1"><span><i class='bx bxs-star bg-dark'></i></span></option>
            <option value="2"><i class='bx bxs-star text-warning'></i><i class='bx bxs-star'></i></option>
            <option value="3"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
            <option value="4"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
            <option value="5"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
        </select>

        <label for="url">Photo client</label>
        <input type="file" name="url" id="url" value="{{old('url')}}">

        <button class="btn btn-success mt-3 w-25" type="submit">Modifier</button>
    </form>

</section>

@endsection
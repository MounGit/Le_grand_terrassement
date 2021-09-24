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

    <form class="container d-flex flex-column w-75" action="{{route('customers.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" value="{{old('name')}}" name="name" id="name">

        <label for="firstname">Prénom : </label>
        <input type="text" value="{{old('firstname')}}" name="firstname" id="firstname">

        <label for="comment">Commentaire : </label>
        <textarea name="comment" id="comment" cols="30" rows="4">{{old('comment')}}</textarea>

        <label for="grade">Note : </label>
        <select class="form-select" name="grade" id="grade" aria-label="Default select example">
            <option selected>Note du client</option>
            <option class="bg-dark" value="1"><i class='bx bxs-pizza' ></i></option>
            <option value="2"><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
            <option value="3"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
            <option value="4"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
            <option value="5"><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
        </select>

        <label for="url">Photo client</label>
        <input type="file" name="url" id="url" value="{{old('url')}}">

        <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
    </form>

</section>

@endsection
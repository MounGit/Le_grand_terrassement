@extends('backoffice.template.mainBack')

@section('baka')
<h2 class="page-section-heading text-center text-uppercase py-5">ajoutez un commentaire</h2>

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
        <label class="my-2" for="name">Nom : </label>
        <input type="text" value="{{old('name')}}" name="name" id="name">

        <label class="my-2" for="firstname">Prénom : </label>
        <input type="text" value="{{old('firstname')}}" name="firstname" id="firstname">

        <label class="my-2" for="comment">Commentaire : </label>
        <textarea name="comment" id="comment" cols="30" rows="4">{{old('comment')}}</textarea>

        <label class="my-2" for="grade">Note : </label>
        <select class="form-select" name="grade" id="grade" aria-label="Default select example">
            <option selected>Note du client sur 5</option>
            <option value="1"> 1<i class='bx bxs-pizza bg-dark' ></i></option>
            <option value="2"> 2<i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
            <option value="3"> 3<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
            <option value="4"> 4<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
            <option value="5"> 5<i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i><i class='bx bxs-star'></i></option>
        </select>

        <label class="my-2" for="url">Photo client</label>
        <input type="file" name="url" id="url" value="{{old('url')}}">

        <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
    </form>

</section>

@endsection
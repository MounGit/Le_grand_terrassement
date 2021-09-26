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

    <form class="container d-flex flex-column w-75" action="{{route('users.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <label for="name">Nom : </label>
        <input type="text" value="{{old('name')}}" name="name" id="name">

        <label for="email">Email : </label>
        <input type="text" value="{{old('email')}}" name="email" id="email">

        <label for="password">Password : </label>
        <input type="password" value="{{old('password')}}" name="password" id="password">

        <label for="role_id">Role : </label>
        {{-- <input type="text" value="{{old('role')}}" name="role" id="role"> --}}
        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role_id">
            <option selected>Role</option>
            <option value="1">Admin</option>
            <option value="2" >Webmaster</option>
            <option value="3">Editeur</option>
          </select>

        <button class="btn btn-success mt-3 w-25" type="submit">Ajouter</button>
    </form>
</section>

@endsection
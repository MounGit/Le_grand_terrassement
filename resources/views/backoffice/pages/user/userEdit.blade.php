@extends('backoffice.template.mainBack')

@section('baka')

<h2 class="page-section-heading text-center text-uppercase py-5">Modifiez les utilisateurs</h2>

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

    <form class="container d-flex flex-column w-75" action="{{route('users.update', $user->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PUT')
        <label for="name">Nom : </label>
        <input type="text" value="{{$user->name}}" name="name" id="name">

        <label for="email">Email : </label>
        <input type="text" value="{{$user->email}}" name="email" id="email">

        <label for="password">Password : </label>
        <textarea name="password" id="password" cols="30" rows="4">{{$user->password}}</textarea>

        <label for="grade">Role : </label>
        {{-- <select class="form-select" value="{{$user->role_id}}" name="role_id" id="role_id"  aria-label="Default select example"> --}}
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="role_id">
                <option selected>Role</option>
                <option value="1">Admin</option>
                <option value="2" >Webmaster</option>
                <option value="3">Editeur</option>
              </select>

        <button class="btn btn-success mt-3 w-25" type="submit">Modifier</button>
    </form>

</section>

@endsection
@extends('layouts.index')
@section('content')
    <div class="container my-5">
        <form action="/update/{{ $cars->id }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="">Marque</label>
            <input type="text" name="marque" id="" value="{{ $cars->marque }}">

            <label for="">Année</label>
            <input type="number" name="annee" id="" value="{{ $cars->annee }}">

            <label for="">Couleur</label>
            <input type="text" name="couleur" id="" value="{{ $cars->couleur->couleur }}">

            <button type="submit">update</button>

        </form>
    </div>
@endsection

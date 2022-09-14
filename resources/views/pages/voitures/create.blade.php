@extends('layouts.index')
@section('content')
<div class="container my-5">

    <form action="createvoiture" method="post" enctype="multipart/form-data">
    @csrf

    <label for="">Marque</label>
    <input type="text" name="marque" id="">

    <label for="">Année</label>
    <input type="number" name="annee" id="">

    <label for="">Couleur</label>
    <input type="text" name="couleur" id="">
{{--
    <label for="">Couleur_ID</label>
    <input type="number" name="couleur_id" id=""> --}}

    <button type="submit">Ajouter</button>

    </form>
</div>
@endsection

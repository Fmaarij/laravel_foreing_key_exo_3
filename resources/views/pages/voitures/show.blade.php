@extends('layouts.index')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h1>Tous les voitures</h1>
                <table class="table table-striped table-bordered table-hover table-responsiveness tablespoons">
                    <thead>
                        <tr>
                            <th>ID Voiture</th>
                            <th>Marque</th>
                            <th>Année</th>
                            <th>Couleur ID</th>
                            <th>Couleur</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $cars->id }}</td>
                            <td>{{ $cars->marque }}</td>
                            <td>{{ $cars->annee }}</td>
                            <td>{{ $cars->couleur_id }}</td>
                            <td>{{ $cars->couleur->couleur }}</td>
                            <td>
                                <a href="/edit/{{ $cars->id }}">
                                    <button class="btn btn-outline-warning">edit</button>
                                </a>
                            </td>
                            <td>
                                <form action="/{{ $cars->id }}/delete" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-outline-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

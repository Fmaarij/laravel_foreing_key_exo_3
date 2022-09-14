@extends('layouts.index')
@section('content')
    <div class="container my-5">
        <div class="row">
            {{-- affichage de tous les voiture  --}}
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
                            <th>Show</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cars as $car)
                            <tr>
                                <td>{{ $car->id }}</td>
                                <td>{{ $car->marque }}</td>
                                <td>{{ $car->annee }}</td>
                                <td>{{ $car->couleur_id }}</td>
                                <td>{{ $car->couleur->couleur }}</td>
                                <td>
                                    <a href="/show/{{ $car->id }}">
                                        <button class="btn btn-outline-primary">Show</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- affichage des voiture dont le couleur = Rouge --}}
            <div class="col">
                <h1>Voiture Rouge</h1>
                <table class="table table-striped table-bordered table-hover table-responsiveness">
                    <thead>
                        <tr>
                            <th>ID Voiture</th>
                            <th>Marque</th>
                            <th>Année</th>
                            <th>Couleur</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colors as $color)
                            <tr>
                                @if ($color->couleur == 'Rouge')
                                    <td>{{ $color->voiture->id }}</td>
                                    <td>{{ $color->voiture->marque }}</td>
                                    <td>{{ $color->voiture->annee }}</td>
                                    <td>{{ $color->couleur }}</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- affichage des voiture dont le couleur = Bleu --}}
            <div class="col">
                <h1>Voiture Bleu</h1>
                <table class="table table-striped table-bordered table-hover table-responsiveness">
                    <thead>
                        <tr>
                            <th>ID Voiture</th>
                            <th>Marque</th>
                            <th>Année</th>
                            <th>Couleur</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colors as $color)
                            <tr>
                                @if ($color->couleur == 'Bleu')
                                    <td>{{ $color->voiture->id }}</td>
                                    <td>{{ $color->voiture->marque }}</td>
                                    <td>{{ $color->voiture->annee }}</td>
                                    <td>{{ $color->couleur }}</td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

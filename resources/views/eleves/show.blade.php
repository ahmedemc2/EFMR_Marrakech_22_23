@extends('layout.app')
@section('content')
    @php
        $sommeJours = 0;
    @endphp

    @dd($eleve)

    <div class="container mt-4">
        <ul>
            <li>ID Elève: <strong> {{ $eleve->id }} </strong> </li>
            <li>Nom: <strong> {{ $eleve->nom }} </strong> </li>
            <li>Prénom: <strong> {{ $eleve->prenom }} </strong> </li>
            <li>ID Club: <strong> {{ $eleve->club_id }} </strong> </li>
        </ul>
        <h2 class="text-center">Liste d'activités auxquelles l'élève a participé</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID élève</th>
                    <th>Description</th>
                    <th>Date Début</th>
                    <th>Nombre de jours</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($activites as $activite)
                    <tr>
                        <td>{{ $activite->id }}</td>
                        <td>{{ $activite->description }}</td>
                        <td>{{ $activite->dateDebut }}</td>
                        <td>{{ $activite->nombreJours }}</td>
                    </tr>
                    @php
                        $sommeJours += $activite->nombreJours;
                    @endphp
                @endforeach
            </tbody>
        </table>
        <h6>Nombre totale des jours: {{ $sommeJours }}</h6>
    </div>
@endsection

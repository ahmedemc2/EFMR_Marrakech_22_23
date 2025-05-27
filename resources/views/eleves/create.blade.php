@extends('layout.app')

@section('content')
    <div class="container">
        <h3 class="text-center">Ajouter un élève</h3>

        <form action="{{ route('eleves.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom: </label>
                <input type="text" name="nom" class="form-control" placeholder="Enter le nom de l'élève" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom: </label>
                <input type="text" name="prenom" class="form-control" placeholder="Enter le prénom de l'élève" required>
            </div>

            <div class="mb-3">
                <label for="club_id" class="form-label">ID Club: </label>
                <select name="club_id" class="form-select" required>
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}">
                            {{ $club->id . ' ' . $club->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
            <a href="{{ route('eleves.index') }}" class="btn btn-danger">Annuler</a>
        </form>
    </div>
@endsection

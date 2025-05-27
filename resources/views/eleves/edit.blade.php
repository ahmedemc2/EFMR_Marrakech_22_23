@extends('layout.app')

@section('content')
    <div class="container">
        <h3 class="text-center">Modifier l'élève</h3>

        <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
            @csrf
            @method('PATCH') <!-- Important pour les formulaires de mise à jour -->
            <div class="mb-3">
                <label for="nom" class="form-label">Id élève:</label>
                <input type="text" name="id" class="form-control" value="{{ $eleve->id }}" readonly>
            </div>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom: </label>
                <input type="text" name="nom" class="form-control" value="{{ $eleve->nom }}" required>
            </div>

            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom: </label>
                <input type="text" name="prenom" class="form-control" value="{{ $eleve->prenom }}" required>
            </div>

            <div class="mb-3">
                <label for="club_id" class="form-label">ID Club: </label>
                <select name="club_id" class="form-select" required>
                    @foreach ($clubs as $club)
                        <option value="{{ $club->id }}" {{ $club->id === $eleve->club_id ? 'selected' : '' }}>
                            {{ $club->id . ' ' . $club->nom }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Modifier</button>
            <a href="{{ route('eleves.index') }}" class="btn btn-danger">Annuler</a>
        </form>
    </div>
@endsection

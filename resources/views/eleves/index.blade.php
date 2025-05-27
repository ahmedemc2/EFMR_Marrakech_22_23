@extends('layout.app');

@section('content')
    <div class="container mt-4">
        <h2 class="text-center p-3">Liste des élèves</h2>
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>ID élève</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>ID club</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eleves as $eleve)
                    <tr>
                        <td>{{ $eleve->id }}</td>
                        <td>{{ $eleve->nom }}</td>
                        <td>{{ $eleve->prenom }}</td>
                        <td>{{ $eleve->club_id }}</td>
                        <td class="d-flex gap-4">
                            <a href="{{ url('/eleves/' . $eleve->id . '/edit') }}" class="btn btn-sm btn-primary">Modifier</a>
                            <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Confirmer la suppression ?')">
                                    Supprimer
                                </button>
                            </form>
                            <a href="{{ url('/eleves/' . $eleve->id) }}" class="btn btn-sm btn-info text-white">Détails</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

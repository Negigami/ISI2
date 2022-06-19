@extends('../layouts.layout')

@section('titrePage')
    Listes des utilisateurs
@endsection

@section('titreItem')
    <h1>Tous les utilisateurs :</h1>
@endsection

@section('contenu')
    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Mdp</th>
            <th>Date de naissance</th>
            <th></th>
            <th></th>
            <th><a class="btn btn-success" href="{{ route('utilisateurs.create') }}">Nouvel utilisateur</a></th>
        </thead>
        @foreach($utilisateurs as $utilisateur)
            <tr>
                <td> {{ $utilisateur->id }} </td>
                <td> {{ $utilisateur->nom }} </td>
                <td> {{ $utilisateur->prenom }} </td>
                <td> {{ $utilisateur->mail }} </td>
                <td> {{ $utilisateur->mdp }} </td>
                <td> {{ $utilisateur->naissance }} </td>
                <td><a class="btn btn-primary" href="{{ route('utilisateurs.show', $utilisateur->id) }}">Voir</a></td>
                <td><a class="btn btn-warning" href="{{ route('utilisateurs.edit', $utilisateur->id) }}">Modifier</a></td>
                <td>
                    <form action="{{ route('utilisateurs.destroy', $utilisateur->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Supprimer</button>
                    </form>
                    
                </td>
            </tr>
        @endforeach
    </table>
@endsection
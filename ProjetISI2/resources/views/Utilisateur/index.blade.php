@extends('../layouts.layout')

@section('titrePage')
    Listes des utilisateurs
@endsection

@section('titreItem')
    <h1>Tous les utilisateurs :</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Email</th>
            <th>Mdp</th>
            <th>Date de naissance</th>
            <th>Détails</th>
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
            </tr>
        @endforeach
    </table>
@endsection
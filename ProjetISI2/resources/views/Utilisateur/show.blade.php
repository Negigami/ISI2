@extends('../layouts.layout')

@section('titrePage')
    Utilisateur n°{{ $utilisateur->id }}
@endsection

@section('titreItem')
    <h1>Utilisateur n°{{ $utilisateur->id }} :</h1>
@endsection

@section('contenu')

<h2>{{ $utilisateur->nom }} {{ $utilisateur->prenom }}</h2>
<p>Mail : {{ $utilisateur->mail }}</p>
<p>Date de naissance : {{ $utilisateur->naissance }}</p>
<h3>Commandes :</h3>
<table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Date</th>
            <th>Détails</th>
        </thead>
        @foreach($utilisateur->commandes as $commande)
            <tr>
                <td> {{ $commande->id }} </td>
                <td> {{ $commande->date }} </td>
                <td><a class="btn btn-primary" href="{{ route('commandes.show', $commande->id) }}">Voir</a></td>
            </tr>
        @endforeach
    </table>
@endsection
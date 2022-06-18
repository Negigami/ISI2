@extends('../layouts.layout')

@section('titrePage')
    Listes des commandes
@endsection

@section('titreItem')
    <h1>Tous les commandes :</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Date</th>
            <th>UserId</th>
        </thead>
        @foreach($commandes as $commande)
            <tr>
                <td> {{ $commande->id }} </td>
                <td> {{ $commande->date }} </td>
                <td> {{ $commande->utilisateur_id }} </td>
            </tr>
        @endforeach
    </table>
@endsection
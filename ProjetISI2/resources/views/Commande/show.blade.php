@extends('../layouts.layout')

@section('titrePage')
    Commande n°{{ $commande->id }}
@endsection

@section('titreItem')
    <h1>Commande n°{{ $commande->id }} :</h1>
@endsection

@section('contenu')

<h2>Utilisateur : {{ $commande->utilisateur->nom }} {{ $commande->utilisateur->prenom }}</h2>
<p>Date de commande : {{ $commande->date }}</p>
<table class="table table-bordered table-striped">
        <thead>
            <th>Quantite</th>
            <th>Id</th>
            <th>Nom</th>
            <th>Prix HT</th>
            <th>Prix TTC</th>
            <th>Taux TVA</th>
            <th>Reference produit</th>
        </thead>
        @foreach($commande->produits as $produit)
            <tr>
                <td> {{ $produit->pivot->quantite }} </td>
                <td> {{ $produit->id }} </td>
                <td> {{ $produit->nom }} </td>
                <td> {{ $produit->prix_ht }} </td>
                <td> {{ $produit->prix_ttc }} </td>
                <td> {{ $produit->taux_tva}} </td>
                <td> {{ $produit->reference }} </td>
            </tr>
        @endforeach
    </table>
@endsection
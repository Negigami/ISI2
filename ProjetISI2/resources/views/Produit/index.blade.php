@extends('../layouts.layout')

@section('titrePage')
    Listes des produits
@endsection

@section('titreItem')
    <h1>Tous les produits :</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prix HT</th>
            <th>Prix TTC</th>
            <th>Taux TVA</th>
            <th>Reference</th>
            <th>Id admin</th>
        </thead>
        @foreach($produits as $produit)
            <tr>
                <td> {{ $produit->id }} </td>
                <td> {{ $produit->nom }} </td>
                <td> {{ $produit->prix_ht }} </td>
                <td> {{ $produit->prix_ttc }} </td>
                <td> {{ $produit->taux_tva }} </td>
                <td> {{ $produit->reference }} </td>
                <td> {{ $produit->id_admin }} </td>
            </tr>
        @endforeach
    </table>
@endsection
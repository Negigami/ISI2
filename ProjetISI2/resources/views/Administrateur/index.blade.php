@extends('../layouts.layout')

@section('titrePage')
    Listes des administrateurs
@endsection

@section('titreItem')
    <h1>Tous les administrateurs :</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Login</th>
            <th>Mdp</th>
        </thead>
        @foreach($administrateurs as $administrateur)
            <tr>
                <td> {{ $administrateur->id }} </td>
                <td> {{ $administrateur->login }} </td>
                <td> {{ $administrateur->mdp }} </td>
            </tr>
        @endforeach
    </table>
@endsection
@extends('../layouts.layout')

@section('titrePage')
    Nouvel utilisateur
@endsection

@section('titreItem')
    <h1>Ajouter un nouveau utilisateur</h1>
@endsection
@section('contenu')
    @if(session()->has('info'))
        <div class="card text-white bg-success mb-3" style="max-width: 18rem">
            <div class="card-body">
                <p class="card-text">{{ session('info') }}</p>
            </div>
        </div>
    @endif
    <br> 
    <div class="container"> 
        <div class="row card text-white bg-dark"> 
            <h4 class="card-header">Ajouter un utilisateur</h4> 
            <div class="card-body"> 
                <form action="{{ route('utilisateurs.update', $utilisateur->id)}}" method="POST"> 
                    @csrf 
                    @method('put')
                    <br> 
                    <div class="form-group"> 
                        <input type="text" class="form-control @error('nom') is-invalid @enderror" name="nom" id="nom" value="{{ old('nom', $utilisateur->nom) }}" placeholder="Nom de l'utilisateur"> 
                        @error('nom') 
                        <div class="alert alert-danger">{{ $message }}</div> 
                        @enderror 
                    </div> 
                    <br> 
                    <div class="form-group"> 
                        <input type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" id="prenom" value="{{ old('prenom', $utilisateur->prenom) }}" placeholder="Prenom de l'utilisateur"> 
                        @error('prenom') 
                        <div class="alert alert-danger">{{ $message }}</div> 
                        @enderror 
                    </div> 
                    <br> 
                    <div class="form-group"> 
                        <input type="text" class="form-control @error('mail') is-invalid @enderror" name="mail" id="mail" value="{{ old('mail', $utilisateur->mail) }}" placeholder="Mail de l'utilisateur"> 
                        @error('mail') 
                        <div class="alert alert-danger">{{ $message }}</div> 
                        @enderror 
                    </div> 
                    <br> 
                    <div class="form-group"> 
                        <input type="password" class="form-control @error('mdp') is-invalid @enderror" name="mdp" id="mdp" value="{{ old('mdp', $utilisateur->mdp) }}" placeholder="Mot de passe"> 
                        @error('mdp') 
                        <div class="alert alert-danger">{{ $message }}</div> 
                        @enderror 
                    </div> 
                    <br> 
                    <div class="form-group"> 
                        <input type="date" class="form-control @error('naissance') is-invalid @enderror" name="naissance" id="naissance" value="{{ old('naissance', $utilisateur->naissance) }}" placeholder="Date de naissance"> 
                        @error('naissance') 
                        <div class="alert alert-danger">{{ $message }}</div> 
                        @enderror 
                    </div> 
                    <br> 
                    <button type="submit" class="btn btn-secondary">Envoyer !</button> 
                </form> 
            </div> 
        </div> 
    </div> 
@endsection
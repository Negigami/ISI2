<?php

namespace App\Http\Controllers;

use App\Http\Requests\InsertUtilisateurRequest;
use App\Models\Utilisateur;
use Illuminate\Http\Request;

class UtilisateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $utilisateurs = Utilisateur::all();
        return view('Utilisateur/index', compact('utilisateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Utilisateur/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\InsertUtilisateurRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InsertUtilisateurRequest $request)
    {
        $request->replace(['mdp' => sha1($request->mdp)]);
        Utilisateur::create($request->all());
        return redirect()->action([UtilisateurController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateur $utilisateur)
    {
        return view("Utilisateur/show", compact('utilisateur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateur $utilisateur)
    {
        return view('Utilisateur/edit', compact('utilisateur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Utilisateur $utilisateur)
    {
        $request->replace(['mdp' => sha1($request->mdp)]);
        $utilisateur->update($request->all());
        return back()->with('info', "L'utilisateur a bien été modifié de la base de données.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateur  $utilisateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateur $utilisateur)
    {
        $utilisateur->delete();
        return back()->with('info', "L'utilisateur a bien été supprimé de la base de données.");
    }
}

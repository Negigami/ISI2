<?php

namespace App\Http\Controllers;

use App\Models\Administrateur;
use Illuminate\Http\Request;

class AdministrateurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $administrateurs = Administrateur::all();
        return view('Administrateur/index', compact('administrateurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function show(Administrateur $administrateur)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function edit(Administrateur $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Administrateur $administrateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Administrateur  $administrateur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Administrateur $administrateur)
    {
        return back()->with('info', "L'administrateur a bien été supprimé de la base de données.");
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dessinateur;

class DessinateurController extends Controller
{
    //provide data to home page.
    public function index() {
        $dessinateur = new Dessinateur();
        $dessinateurs = $dessinateur->getAll();
        return view('indexDessinateur', compact('dessinateurs'));
    }
}

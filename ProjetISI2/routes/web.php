<?php

use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\UtilisateurController;
use App\Http\Controllers\ProduitController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('utilisateurs', UtilisateurController::class);
Route::resource('produits', ProduitController::class);
Route::resource('commandes', CommandeController::class);
Route::resource('administrateurs', AdministrateurController::class);

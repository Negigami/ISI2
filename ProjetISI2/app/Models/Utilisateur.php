<?php

namespace App\Models;

use Illuminate\Console\Command;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'mail',
        'mdp',
        'naissance'
    ];

    public function commandes() {
        return $this->hasMany(Commande::class);
    }
}

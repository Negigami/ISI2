<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    public function utilisateurs() {
        return $this->belongsTo(Utilisateur::class);
    }

    public function produit() {
        return $this->belongsToMany(Produit::class)->withPivot("quantite");
    }
}

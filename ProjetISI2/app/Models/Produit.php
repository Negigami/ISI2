<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function commandes() {
        return $this->belongsToMany(Commande::class, 'commande_produit', 'id_commande', 'id_commande')->withPivot("quantite");
    }

    public function administrateur() {
        return $this->belongsTo(Administrateur::class);
    }
}

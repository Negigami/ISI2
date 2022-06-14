<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    public function commande() {
        return $this->belongsToMany(Commande::class)->withPivot("quantite");
    }

    public function administrateur() {
        return $this->belongsTo(Administrateur::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modele extends Model
{
    use HasFactory;

	protected $fillable = [
        'genre', // PVC ou Aluminuim
        'type', // 1 à 6 Fenêtre à souflet ..
        'couleur',
        'hauteur',
        'largeur',
        'prix',
    ];

}

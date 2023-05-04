<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shutter extends Model
{
    use HasFactory;

	protected $fillable = [
        'type', //multicom, futurcom, avec moustiquaire
        'hauteur',
        'largeur',
        'prix',
    ];

}

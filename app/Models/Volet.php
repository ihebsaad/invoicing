<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volet extends Model
{
    use HasFactory;

	protected $fillable = [
        'shutter',
        'qty',
        'price',
        'price_ht',
        'text',
		'couleur',
        'note',
        'price_ht',
        'total_ttc',
        'hauteur',
        'largeur',
        'pose',
        'tva_pose',
        'pose_ttc',
        'surface',
        'quote',
        'invoice',
    ];

    public function modele()
	{
		return $this->belongsTo('App\Models\Shutter', 'shutter', 'id');
	}

	public function quote()
	{
		return $this->belongsTo('App\Models\Quote', 'quote', 'id');
	}

	public function invoice()
	{
		return $this->belongsTo('App\Models\Invoice', 'invoice', 'id');
	}

}

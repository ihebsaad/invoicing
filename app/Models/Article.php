<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

	protected $fillable = [
        'modele',
        'qty',
        'price',
        'price_ht',
        'text',
        'note',
        'groupe',
        'price_ht',
        'total_ttc',
        'quote',
        'invoice',
        'cintrage',
        'couleur'
    ];

    public function modele()
	{
		return $this->belongsTo('App\Models\Modele', 'modele', 'id');
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

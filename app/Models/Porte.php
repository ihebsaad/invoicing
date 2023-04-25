<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Porte extends Model
{
    use HasFactory;

	protected $fillable = [
        'door',
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
        'couleur',
        'cintrage'
    ];

    public function door()
	{
		return $this->belongsTo('App\Models\Door', 'door', 'id');
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

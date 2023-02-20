<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

	protected $fillable = [
        'devis_signe',
        'name',
        'description',
        'adresse',
        'chaudiere',
        'modalite',
        'date',
        'tva',
        'remise',
        'total_tva',
        'total_remise',
        'total_ht',
        'total_ttc',
        'type_aide',
        'aide',
        'montant_finance',
        'report_echeance',
        'mensualites',
        'montant_mensuel',
        'montant_assurance',
        'taux_nominal',
        'taeg',
        'pose',
        'customer',
        'acompte',
        'net',
        'par',
        'surface',
        'logement',
        'delivery_address',
        'delivery_city',
        'delivery_postal',
        'delivery_country',
        'reference',
        'tva_remise'
    ];

		public function customer()
	{
		return $this->belongsTo('App\Models\Customer', 'customer', 'id');
	}

    public function user()
	{
		return $this->belongsTo('App\Models\User', 'par', 'id');
	}

}

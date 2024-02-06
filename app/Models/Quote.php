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
        'total_deplacement',
        'tva_deplacement',
        'deplacement',
        'surface_produits',
        'total_ht',
        'total_ttc',
        'aide_renov',
        'aide_cee',
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
        'tva_remise',
        'menuiserie',
        'chauffage',
        'montant1',
        'note1',
        'montant2',
        'note2',
        'montant3',
        'note3',
        'montant4',
        'note4',
        'loi',
        'remise_loi',
        'total_loi',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
	
	protected $fillable = [
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
		'quote',
        'net'
    ];
	
		public function customer()
	{
		return $this->belongsTo('App\Models\Customer', 'customer', 'id');
	}
	
		public function quote()
	{
		return $this->belongsTo('App\Models\Quote', 'quote', 'id');
	}
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

	protected $fillable = [
        'qty',
        'description',
        'tva',
        'product',
        'quote',
        'invoice',
        'price_ht',
        'price_ttc',
    ];

    public function product()
	{
		return $this->belongsTo('App\Models\Product', 'product', 'id');
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

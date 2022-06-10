<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
	
    protected $table = "customers";

	protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'postal',
        'civility',
        'delivery_address',
        'delivery_city',
        'delivery_postal',
        'delivery_country',

    ];

}

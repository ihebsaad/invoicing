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
        'civility',
        'name2',
        'lastname2',
        'civility2',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'postal',
        'delivery_address',
        'delivery_city',
        'delivery_postal',
        'delivery_country',
        'commercial',
        'company'
    ];

    public function quotes()
    {
        return $this->hasMany(Quote::class);
    }

}

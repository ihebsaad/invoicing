<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

	protected $fillable = [
        'name',
        'description',
        'categorie',
        'reference',
        'prix',
        'prix_ht',
        'tva',
        'pose',
        'tva_pose',
        'pose_ttc',
        'unite',
        'affichage',
        'image'
    ];

    public function categorie()
	{
		return $this->belongsTo('App\Models\Categorie', 'categorie', 'id');
	}
}

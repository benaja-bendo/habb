<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produits_habibe extends Model
{
    use HasFactory;

    protected $fillable =[
        'categorie_produits_habibe_id',
        'name',
        'prix',
        'prix_min',
        'prix_max',
        'imagePath',
        'description'
      ];

    public function categorie(){
        return $this->belongsTo(Categorie_produits_habibe::class,'categorie_produits_habibe_id');
    }
}

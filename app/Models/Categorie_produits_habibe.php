<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie_produits_habibe extends Model
{
    use HasFactory;

    protected $fillable =[
        'name',
        'imagePath',
      ];

    public function produits(){
        return $this->hasMany(Produits_habibe::class);
    }
}

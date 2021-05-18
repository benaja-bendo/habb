<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PointVente extends Model
{
    use HasFactory;

    protected $fillable=[
      'name',
      'commercial_id',
      'imagePath',
      'quartier',
      'ville',
      'telephone',
    ];

    public function geos(){
        return $this->hasMany(geo::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class geo extends Model
{
    use HasFactory;

    protected $fillable=[
        'lat',
        'lng',
    ];

    public function point_vente(){
        return $this->belongsTo(PointVente::class);
    }
}

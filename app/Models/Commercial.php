<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Commercial extends Authenticatable
{
    use HasFactory,Notifiable,HasApiTokens;

    protected $fillable =[
        'prenom',
        'name',
        'telephone',
        'email',
        'imagePath',
        'password',
        'adresse',
        'genre'
      ];

    protected $hidden=[
        'password'
    ];
}

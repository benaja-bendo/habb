<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CommercialRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return parent::toArray($request);
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'prenom'=>$this->prenom,
            'telephone'=>$this->telephone,
            'email'=>$this->email,
            'imagePath'=>$this->imagePath,
            'adresse'=>$this->adresse,
            'genre'=>$this->genre,
            'token'=>$this->createToken('token')->plainTextToken
        ];
    }
}

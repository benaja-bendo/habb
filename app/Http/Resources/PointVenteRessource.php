<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PointVenteRessource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id'=>$this->id,
            'name'=>$this->name,
            'imagePath'=>$this->imagePath,
            'quartier'=>$this->quartier,
            'ville'=>$this->ville,
            'telephone'=>$this->telephone,
            'geo'=> GoesRessource::collection($this->geos)
        ];
    }
}

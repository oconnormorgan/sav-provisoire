<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExchangesResource extends JsonResource
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
            'date'=>$this->date,
            'commentaire'=>$this->commentaire,
            'id_type_exchange'=>$this->id_type_exchange,
            'id_client'=>$this->id_client,
            'id_user'=>$this->id_user,
        ];
    }
}

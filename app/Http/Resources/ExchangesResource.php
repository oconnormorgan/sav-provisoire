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

        $typeExchange =  new TypeExchangesResource($this->typeExchange);
        $client =  new ClientsResource($this->client);
        $user =  new UsersResource($this->user);

        return [
            'id'=>$this->id,
            'date'=>$this->date,
            'commentaire'=>$this->commentaire,
            'id_type_exchange'=>$typeExchange,
            'id_client'=>$client,
            'id_user'=>$user,
        ];
    }
}

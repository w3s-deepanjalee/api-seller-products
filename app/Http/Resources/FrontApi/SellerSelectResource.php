<?php

namespace App\Http\Resources\FrontApi;

use Illuminate\Http\Resources\Json\JsonResource;

class SellerSelectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'seller_id'=> $this->id ?? '',
            'seller_name'=> $this->name ?? '',
            'email'=> $this->email ?? '',
            'mobile'=> $this->mobile ?? '',
            'address'=> $this->address ?? '',
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name'=>$this->name,
            'type'=>$this->type,
            'email'=>$this->email,
            'adress'=>$this->adress,
            'city'=>$this->city,
            'state'=>$this->state,
            'postalCode'=>$this->postal_code,
        ];
    }
}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompanyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
      return [
          'id'=>$this->id,
          'name'=>$this->name,
          'type'=>$this->type,
          'email'=>$this->email,
          'website'=>$this->website,
          'address'=>$this->address,
          'phone'=>$this->phone,
          'mobile'=>$this->mobile,
          'media' => MediaResource::make($this, 'companies'),

      ];
    }

}



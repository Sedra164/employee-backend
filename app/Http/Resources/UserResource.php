<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = [
            'id' => $this->id,
            'user_name' => $this->user_name,
            'first_name' => $this->first_name,
            'last_name'=>$this->last_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'idNumber'=>$this->idNumber,
            'roles'=>$this->roles,

        ];


        if (isset($this->token)) {
            $data['access_token'] = $this->token;
        }
        return $data;
    }

}

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
            'full_name' => $this->full_name,
            'phone' => $this->phone,
            'email' => $this->email,
            'address'=>$this->address,
            'idNumber'=>$this->idNumber,

        ];
        if (isset($this->referrer_id)) {
            $data['referrer'] = $this->referrer_id;
        }
        if (isset($this->token)) {
            $data['access_token'] = $this->token;
        }
        return $data;
    }

}

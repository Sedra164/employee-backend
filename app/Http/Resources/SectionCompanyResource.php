<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SectionCompanyResource extends JsonResource
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
            'section_id'=>$this->section_id,
            'company_id'=>$this->company_id,
        ];
    }
    public function withSection(){
        $data=[
            'id'=>$this->id,
            'name'=>$this->name,
        ];
        $data['section']=SectionResource::make($this->section);
        return $data;
    }
public function withCompany(){
        $data=[  'id'=>$this->id,
            'name'=>$this->name,
            'type'=>$this->type,
            'email'=>$this->email,
            'websit'=>$this->website,
            'address'=>$this->address,];
        $data['company']=CompanyResource::make($this->company);
        return $data;
}
}

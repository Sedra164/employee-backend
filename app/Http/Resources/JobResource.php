<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class JobResource extends JsonResource
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
           'title'=>$this->title,
           'jobDescription'=>$this->jobDescription,
           'count'=>$this->count,
           'salary'=>$this->salary,
           'media' => MediaResource::make($this, 'jobs'),
       ];
    }
    public function withSectionCompany(){
        $data=[
            'id'=>$this->id,
            'section_id'=>$this->section_id,
            'company_id'=>$this->company_id,
        ];
        $data['section_company']=SectionCompanyResource::make($this->section_compny);
        return $data;
    }
}

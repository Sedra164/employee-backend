<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class sectionCompany extends Model
{
    use HasFactory;
    public function job(): HasMany
    {
        return $this->hasMany(job::class,'section_company_id');
    }
}

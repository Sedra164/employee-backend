<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class sectionCompany extends Model
{
    use HasFactory;



    public function job(): HasMany
   {
       return $this->hasMany(Job::class);
   }
   public function section():BelongsTo
   {
       return $this->belongsTo(Section::class);
   }
    public function company():BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}

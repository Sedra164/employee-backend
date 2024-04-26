<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Section extends Model
{
    use HasFactory;

    protected $fillable=['name'];

    public function companies(): BelongsToMany
    {
        return $this->belongsToMany(Company::class,'section_company');
    }
    public function sectionCompany():HasMany
    {
        return $this->hasMany(sectionCompany::class);
    }
}

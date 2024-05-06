<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Section extends Model implements HasMedia
{
    use HasFactory , InteractsWithMedia;

    protected $fillable=['name'];

    public function company(): BelongsToMany
    {
        return $this->belongsToMany(Company::class,'section_company');
    }
    public function sectionCompany():HasMany
    {
        return $this->hasMany(sectionCompany::class);
    }
}

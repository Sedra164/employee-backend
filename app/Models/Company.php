<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Company extends Model implements HasMedia
{
    use HasFactory ,InteractsWithMedia;

    protected $fillable=['name','type','email','address','website'];
    public function manager(): BelongsTo
    {
        return $this->belongsTo(User::class,'manager_id');
    }
    public function sections(): HasMany
    {
        return $this->hasMany(section::class,'section_company_id');
    }
    public function sectionCompany():HasMany
    {
        return $this->hasMany(sectionCompany::class);
    }
    public function educationJob():HasMany{
        return $this->hasMany(educationJob::class);
    }

}

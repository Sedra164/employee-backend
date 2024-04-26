<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable=['name','type','email','address','website'];
    public function manager(): BelongsTo
    {
        return $this->belongsTo(User::class,'manager_id');
    }
    public function sections(): HasMany
    {
        return $this->hasMany(section::class,'section_company');
    }
    public function sectionCompany():HasMany
    {
        return $this->hasMany(sectionCompany::class);
    }

}

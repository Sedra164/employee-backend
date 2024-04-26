<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;
    protected $fillable=['title','jobDescription','count','salary'];
    public function form(): HasMany
    {
        return $this->hasMany(Form::class);

    }
    public function skill(): BelongsToMany
    {
        return $this->belongsToMany(Skill::class,'job_skill');
    }
    public function education(): BelongsToMany
    {
        return $this->belongsToMany(Education::class,'education_job');
    }
    public function sectionCompany(): HasMany
    {
        return $this->hasMany(sectionCompany::class);

    }


}

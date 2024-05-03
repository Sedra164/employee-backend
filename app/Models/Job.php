<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;
    protected $fillable=['title','jobDescription','count','salary'];
    public function form(): HasMany
    {
        return $this->hasMany(Form::class);

    }
    public function skill(): HasMany
    {
        return $this->hasMany(Skill::class,'job_skill');
    }
    public function education(): HasMany
    {
        return $this->hasMany(Education::class,'education_job');
    }
    public function sectionCompany(): BelongsTo
    {
        return $this->belongsTo(sectionCompany::class);

    }
    public function skillJob():HasMany{
        return $this->hasMany(skillJob::class);
    }
    public function educationJob():HasMany{
        return $this->hasMany(educationJob::class);
    }


}

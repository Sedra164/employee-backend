<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Skill extends Model
{
    use HasFactory;
    protected $fillable=['otherSkills','language','year'];
    public function form(): BelongsToMany
    {
        return $this->belongsToMany(Form::class,'form_skill');
    }
    public function job(): BelongsToMany
    {
        return $this->belongsToMany(Job::class,'job_skill');
    }
   public function formSkill():HasMany{
       return $this->hasMany(formSkill::class);
   }
    public function skillJob():HasMany{
        return $this->hasMany(skillJob::class);
    }
}

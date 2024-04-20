<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Skill extends Model
{
    use HasFactory;
    public function form(): BelongsToMany
    {
        return $this->belongsToMany(Form::class,'form_skill');
    }
    public function job(): BelongsToMany
    {
        return $this->belongsToMany(Job::class,'job_skill');
    }
}

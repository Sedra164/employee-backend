<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Education extends Model
{
    use HasFactory;

    public function form(){
        return $this->belongsTo(Form::class);
    }
    public function job(): BelongsToMany
    {
        return $this->belongsToMany(Job::class,'education_job');
    }
}

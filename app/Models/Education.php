<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Education extends Model implements HasMedia
{  use HasFactory , InteractsWithMedia;

    protected $fillable=['certificate','certificate_name','specialization_name'];
    protected $table='educations';


    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }
    public function job(): BelongsToMany
    {
        return $this->belongsToMany(Job::class,'education_job');
    }
}

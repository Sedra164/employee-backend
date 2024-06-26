<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class skillJob extends Model
{
    use HasFactory;
    protected $fillable=['year'];
    public function job():BelongsTo{
        return $this->belongsTo(Job::class);
    }
    public function skill():BelongsTo{
        return $this->belongsTo(Skill::class);
    }
}

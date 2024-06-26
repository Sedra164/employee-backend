<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class formSkill extends Model
{
    use HasFactory;
    public function form():BelongsTo{
        return $this->belongsTo(Form::class);
    }
    public function skill():BelongsTo{
        return $this->belongsTo(Skill::class);
    }
}

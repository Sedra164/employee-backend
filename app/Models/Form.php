<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Form extends Model
{
    use HasFactory;
    protected $fillable=['first_name','last_name','father_name','mother_name','age','gender',
        'martial_social','address','phone','birth_date'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function education(): HasMany
    {
        return $this->hasMany(Education::class);
    }
    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
    public function skill(): HasMany
    {
        return $this->hasMany(Skill::class,'form_skill');
    }
    public function formSkill():HasMany{
        return $this->hasMany(formSkill::class);
    }
}

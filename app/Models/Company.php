<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Company extends Model
{
    use HasFactory;

    protected $fillable=['name','type','email','address','website'];
    public function manager(): BelongsTo
    {
        return $this->belongsTo(User::class,'manager_id');
    }
    public function section(): BelongsToMany
    {
        return $this->belongsToMany(section::class,'section_company');
    }
}

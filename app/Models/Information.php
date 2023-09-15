<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Information extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'phone_number',
        'date_of_birth',
        'gender',
        'disability',
        'university_specializations',
        'education_levels',
        'area_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}

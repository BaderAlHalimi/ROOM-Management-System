<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}

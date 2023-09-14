<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'permanent_type',
        'number_of_hours',
        'start_at',
        'end_at',
        'monitor',
        'days',
    ];

}

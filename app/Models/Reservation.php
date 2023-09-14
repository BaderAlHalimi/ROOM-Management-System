<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'date',
        'start_at',
        'end_at',
        'reserveable', //////////Important to revision
        'user_id',
    ];
}

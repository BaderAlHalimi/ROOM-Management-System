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
        'reserveable_type',
        //////////Important to revision
        'reserveable_id',
        //////////Important to revision
        'user_id',
    ];
    protected $with = ['user'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reserveable()
    {
        return $this->morphTo();
    }
}

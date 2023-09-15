<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number_of_desk',
        'type',
        'open_at',
        'clase_at',
        'office_id',
    ];

    public function office(): BelongsTo
    {
        return $this->belongsTo(Office::class);
    }
    public function desks(): HasMany
    {
        return $this->hasMany(Desk::class);
    }
    public function reserves()
    {
        return $this->morphMany(Reservation::class, 'reserveable');
    }
}

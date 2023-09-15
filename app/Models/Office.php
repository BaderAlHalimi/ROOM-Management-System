<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Office extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'address',
        'description',
    ];

    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class, 'office_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VolunteerRequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
    ];

    public function openVolunteer(): BelongsTo
    {
        return $this->belongsTo(OpenVolunteer::class);
    }
}

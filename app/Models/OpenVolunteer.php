<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class OpenVolunteer extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    public function volunteerType(): BelongsTo
    {
        return $this->belongsTo(VolunteerType::class);
    }

    public function volunteerRequirements(): HasMany
    {
        return $this->hasMany(VolunteerRequirement::class);
    }

    public function applicationProcesses(): HasMany
    {
        return $this->hasMany(ApplicationProcess::class);
    }
}

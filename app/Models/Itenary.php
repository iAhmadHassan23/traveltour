<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Itenary extends Model
{
    use HasFactory;

    protected $guarded =[];

    public function tour(): BelongsTo
    {
        return $this->belongsTo(Tour::class);
    }

    public function itenaryExclusives(): HasMany
    {
        return $this->hasMany(ItenaryExclusive::class);
    }
}

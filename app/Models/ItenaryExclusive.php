<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ItenaryExclusive extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function itenary(): BelongsTo
    {
        return $this->belongsTo(Itenary::class);
    }
}

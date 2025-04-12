<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Tour extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the category that owns the blog.
     */
    public function tour_categories()
    {
        return $this->belongsToMany(TourCategory::class, 'tour_category_tour', 'tour_id', 'tour_category_id');
    }

    public function itenaries(): HasMany
    {
        return $this->hasMany(Itenary::class);
    }

    public function highlights(): HasMany
    {
        return $this->hasMany(Highlights::class);
    }

    public function scopePublished($query)
    {
        return $query->where('status', 1)->where(function ($q) {
            $q->where('published_at', '<=', Carbon::now())
                ->orWhereNull('published_at');
        });
    }

    public function scopeIndexing($query)
    {
        $query->where('index_status', 1);
    }
}

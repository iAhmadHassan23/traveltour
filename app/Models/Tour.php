<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the category that owns the blog.
     */
    public function tour_category()
    {
        return $this->belongsTo(TourCategory::class);
    }

    public function scopePublished($query){
        return $query->where('status', 1)->where(function($q){
            $q->where('published_at', '<=', Carbon::now())
                ->orWhereNull('published_at');
        });
    }

    public function scopeIndexing($query)
    {
        $query->where('index_status', 1);
    }
    
}

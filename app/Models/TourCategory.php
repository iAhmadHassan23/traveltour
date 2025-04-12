<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TourCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function tours() {
        return $this->belongsToMany(Tour::class, 'tour_category_tour', 'tour_category_id', 'tour_id');
    }
}

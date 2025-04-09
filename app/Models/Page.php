<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\PageCreated;

class Page extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function sections(){
        return $this->hasMany(PageSection::class, 'page_id', 'id');
    }
    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function scopeIndexing($query)
    {
        $query->where('index_status', 1);
    }

    public function service(){
        return $this->belongsTo(Page::class, 'parent_id', 'id');
    }
}

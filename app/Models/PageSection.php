<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSection extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function page(){
        return $this->belongsTo(Page::class);
    }

    public function scopeActive($query)
    {
        $query->where('status', 1);
    }

    public function selected_services(){
        return $this->belongsToMany(Page::class, 'section_services', 'section_id', 'service_id');
//            ->where('pages.type', 'service');
    }

    public function all_services(){
        return  Page::where('type', 'service')->get();
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $guarded =    [];

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('sort_order', 'ASC');
    }

    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($item) { 
            $item->children()->delete();
        });

    }

}

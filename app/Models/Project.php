<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'subtitle',
        'short_description',
        'full_description',
        'service_id',
        'status',
        'meta_title',
        'meta_description',
    ];

    protected $casts = [
        'status' => 'string',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function images()
    {
        return $this->hasMany(ProjectImage::class)->orderBy('sort_order');
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function isActive()
    {
        return $this->status === 'active';
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getFeaturedImageAttribute()
    {
        return $this->images()->first();
    }
}

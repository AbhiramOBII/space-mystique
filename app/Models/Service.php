<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
        'subtitle',
        'short_description',
        'full_description',
        'meta_title',
        'meta_description',
        'status',
    ];

    protected $casts = [
        'status' => 'string',
    ];

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

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}

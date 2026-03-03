<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class IrManager extends Model
{
    protected $fillable = [
        'name_ar',
        'name_en',
        'position_ar',
        'position_en',
        'phone',
        'email',
        'photo',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    protected $appends = ['photo_url'];

    public function getPhotoUrlAttribute(): ?string
    {
        return $this->photo ? Storage::url($this->photo) : null;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class IrManager extends Model
{
    use HasTranslations;

    public $translatable = ['name', 'position'];

    protected $fillable = [
        'name',
        'position',
        'phone',
        'email',
        'photo',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'name' => 'array',
        'position' => 'array',
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

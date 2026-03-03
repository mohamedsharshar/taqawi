<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class MeetingMinute extends Model
{
    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'file_path',
        'file_name',
        'file_size',
        'meeting_date',
        'type',
        'is_active',
        'order',
    ];

    protected $casts = [
        'meeting_date' => 'date',
        'is_active' => 'boolean',
    ];

    protected $appends = ['file_url'];

    public function getFileUrlAttribute(): string
    {
        return Storage::url($this->file_path);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('meeting_date', 'desc');
    }
}

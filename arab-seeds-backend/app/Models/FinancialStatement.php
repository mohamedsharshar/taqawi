<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class FinancialStatement extends Model
{
    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'file_path',
        'file_name',
        'file_size',
        'statement_date',
        'type',
        'is_active',
        'order',
    ];

    protected $casts = [
        'statement_date' => 'date',
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
        return $query->orderBy('order')->orderBy('statement_date', 'desc');
    }
}

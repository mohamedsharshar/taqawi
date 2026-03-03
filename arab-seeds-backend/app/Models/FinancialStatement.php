<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Spatie\Translatable\HasTranslations;

class FinancialStatement extends Model
{
    use HasTranslations;

    public $translatable = ['title', 'description'];

    protected $fillable = [
        'title',
        'description',
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
        'title' => 'array',
        'description' => 'array',
    ];

    protected $appends = ['file_url'];

    public function getFileUrlAttribute(): string
    {
        return url(Storage::url($this->file_path));
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

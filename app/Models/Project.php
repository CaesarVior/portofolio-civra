<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Project extends Model
{
    protected $fillable = [
        'title',
        'category',
        'banner_image',
        'description',
        'features',
        'tags',
        'link',
        'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'features' => 'array',
            'tags' => 'array',
        ];
    }

    protected function link(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value && ! Str::startsWith($value, ['http://', 'https://']) 
                ? 'https://' . $value 
                : $value,
        );
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory , HasTranslations, Mediable;

    public $translatable = ['name'];

    protected $fillable = ['experience_id', 'icon', 'preview', 'code', 'is_visible'];

    protected $casts = [
        'name' => 'array',
    ];
}

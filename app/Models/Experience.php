<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;
use Spatie\Translatable\HasTranslations;

class Experience extends Model
{
    use HasFactory, HasTranslations, Mediable;

    public $translatable = ['name', 'address', 'description'];

    protected $fillable = ['between', 'is_formation', 'is_visible'];

    protected $casts = [
        'name' => 'array',
        'address' => 'array',
        'description' => 'array',
    ];
}

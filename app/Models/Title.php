<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Title extends Model
{
    use HasFactory, HasTranslations;

    public $translatable = ['name', 'intro'];

    protected $fillable = ['name', 'intro', 'icon'];

    protected $casts = [
        'name' => 'array',
        'intro' => 'array',
    ];
}

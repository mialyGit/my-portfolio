<?php

namespace App\Models;

use App\Traits\TranslationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Plank\Mediable\Mediable;

class Experience extends Model
{
    use HasFactory, Mediable, TranslationTrait;

    public $translatable = ['name', 'address', 'description', 'between'];

    protected $fillable = ['is_formation', 'is_visible'];

    protected $casts = [
        'name' => 'array',
        'address' => 'array',
        'description' => 'array',
        'between' => 'array',
    ];

    public function titles(): BelongsToMany
    {
        return $this->belongsToMany(Title::class)->using(ExperienceTitle::class);
    }
}

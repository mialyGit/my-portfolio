<?php

namespace App\Models;

use App\Traits\TranslationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Title extends Model
{
    use HasFactory, TranslationTrait;

    public $translatable = ['name', 'intro'];

    protected $fillable = ['name', 'intro', 'icon'];

    protected $casts = [
        'name' => 'array',
        'intro' => 'array',
    ];

    public function experiences(): BelongsToMany
    {
        return $this->belongsToMany(Experience::class)->using(ExperienceTitle::class);
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class)->using(ProjectTitle::class);
    }
}

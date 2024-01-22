<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function titles(): BelongsToMany
    {
        return $this->belongsToMany(Title::class)->using(ProjectTitle::class);
    }
}

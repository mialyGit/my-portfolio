<?php

namespace App\Models;

use App\Traits\TranslationTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Plank\Mediable\Mediable;

class Project extends Model
{
    use HasFactory , Mediable, TranslationTrait;

    public $translatable = ['name', 'description'];

    protected $fillable = ['experience_id', 'icon', 'preview', 'code', 'is_visible'];

    protected $casts = [
        'name' => 'array',
    ];

    public function titles(): BelongsToMany
    {
        return $this->belongsToMany(Title::class)->using(ProjectTitle::class);
    }
}

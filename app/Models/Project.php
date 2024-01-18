<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Project extends Model implements TranslatableContract
{
    use HasFactory , Mediable, Translatable;

    public $translatedAttributes = ['name'];

    protected $fillable = ['experience_id', 'icon', 'preview', 'code', 'is_visible'];
}

<?php

namespace App\Models;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Experience extends Model implements TranslatableContract
{
    use HasFactory, Mediable, Translatable;

    public $translatedAttributes = ['name', 'address', 'description'];

    protected $fillable = ['between', 'is_formation', 'is_visible'];
}

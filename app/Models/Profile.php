<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Plank\Mediable\Mediable;

class Profile extends Model
{
    use HasFactory, Mediable;

    protected $fillable = [
        'firstname',
        'name',
        'email',
        'address',
        'phone_1',
        'phone_2',
    ];
}

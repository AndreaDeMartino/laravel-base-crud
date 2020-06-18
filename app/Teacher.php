<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // Fillable here
    protected $fillable = [
    'name',
    'age'
    ];
}

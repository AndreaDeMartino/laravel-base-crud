<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // Fillables here
    protected $fillable = [
    'name',
    'description'
    ];
}

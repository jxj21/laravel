<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    protected $fillable = [
        'title', 'description', 'price','location',
    ];
}

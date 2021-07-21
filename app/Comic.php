<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Comic extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'thumb',
        'price',
        'series',
        'date',
        'type'
    ];
}

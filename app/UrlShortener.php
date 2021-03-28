<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UrlShortener extends Model
{
    protected $fillable = [
        'url', 'hash'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = [
        'title',
        'heb_name',
        'imdb',
        'rotten_tomatoes',
        'watched',
    ];


    public function reviews()
{
    return $this->hasMany(Review::class);
}

}

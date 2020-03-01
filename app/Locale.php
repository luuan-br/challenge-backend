<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locale extends Model
{
    protected $fillable = [
        'id',
        'name',
        'state',
        'latitude',
        'longitude'
    ];

    protected $table = 'locales';

    public function weathers() {
        return $this->hasMany(Weather::class, 'locale_id', 'id');
    }
}

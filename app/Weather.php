<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weather extends Model
{
    protected $fillable = [
        'date',
        'text',
        'temperature_min',
        'temperature_max',
        'rain_probability',
        'rain_precipitation',
        'locale_id'
    ];

    protected $table = 'weathers';

    public function locale() {
        return $this->belongsTo(Locale::class, 'locale_id');
    }
}

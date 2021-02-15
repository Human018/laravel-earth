<?php

namespace Human018\LaravelEarth\Models;

use Illuminate\Database\Eloquent\Model;

class Timezone extends Model
{
    protected $table = 'earth_timezones';

    protected $fillable = ['name', 'label', 'abbreviation', 'offset'];

    public $timestamps = false;

    // Relationships
    public function country()
    {
        return $this->belongsToMany(Country::class, 'earth_country_currency', 'earth_currency_id', 'earth_country_id');
    }
}

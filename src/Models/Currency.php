<?php

namespace Human018\LaravelEarth\Models;

use Human018\LaravelEarth\Traits\EarthTrait;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use EarthTrait;

    protected $table = 'earth_currencies';

    protected $fillable = ['name', 'code', 'symbol'];

    public $timestamps = false;

    // Relationships
    public function country()
    {
        return $this->belongsToMany(Country::class, 'earth_country_currency', 'earth_currency_id', 'earth_country_id');
    }
}

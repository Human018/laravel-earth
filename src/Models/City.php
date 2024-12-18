<?php

namespace Human018\LaravelEarth\Models;

use Human018\LaravelEarth\Traits\EarthTrait;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use EarthTrait;

    protected $table = 'earth_cities';

    protected $fillable = ['country_id', 'region_id', 'name', 'code', 'country_capital', 'region_capital'];

    // Relationships
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}

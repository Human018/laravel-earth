<?php

namespace Human018\LaravelEarth\Models;

use Human018\LaravelEarth\Traits\EarthTrait;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use EarthTrait;

    protected $table = 'earth_regions';

    protected $fillable = ['country_id', 'name', 'name', 'code', 'country_capital', 'region_capital'];

    // Relationships
    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function capital()
    {
        return $this->hasOne(City::class)->where('region_capital', 1);
    }
}

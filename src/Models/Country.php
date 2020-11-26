<?php

namespace Human018\LaravelEarth\Models;

use Human018\LaravelEarth\Traits\EarthTrait;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use EarthTrait;

    protected $table = 'earth_countries';

    protected $fillable = ['name', 'code', 'iso3', 'tld', 'calling_code'];

    public $timestamps = false;

    // Relationships
    public function continent()
    {
        return $this->belongsTo(Continent::class);
    }

    public function regions()
    {
        return $this->hasMany(Region::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function capital()
    {
        return $this->hasOne(City::class)->where('country_capital', 1);
    }

    public function currencies()
    {
        return $this->belongsToMany(Currency::class, 'earth_country_currency', 'earth_country_id', 'earth_currency_id')->withPivot('primary');
    }

    public function languages()
    {
        return $this->morphToMany(Language::class, 'area', 'earth_area_language', 'area_id', 'earth_language_id')->withPivot('primary');
    }
}

<?php

namespace Human018\LaravelEarth\Models;

use Human018\LaravelEarth\Traits\EarthTrait;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use EarthTrait;

    protected $table = 'earth_languages';

    protected $fillable = ['name', 'code', 'iso3', 'native'];

    public $timestamps = false;

    // Relationships
    public function country()
    {
        return $this->morphedByMany(Country::class, 'area', 'earth_area_language');
    }

    // Attributes
    public function getNativeAttribute()
    {
        if (isset($this->attributes['native']) && strlen($this->attributes['native']) > 0) return $this->attributes['native'];
        else return $this->attributes['name'];
    }

}

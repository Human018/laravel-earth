<?php

namespace Human018\LaravelEarth\Models;

use Human018\LaravelEarth\Traits\EarthTrait;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use EarthTrait;

    protected $table = 'earth_languages';

    protected $fillable = ['name', 'code', 'iso3'];

    public $timestamps = false;

    // Relationships
    public function country()
    {
        return $this->morphedByMany(Country::class, 'area', 'earth_area_language');
    }

}

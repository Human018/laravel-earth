<?php

namespace Human018\LaravelEarth\Models;

use Human018\LaravelEarth\Traits\EarthTrait;
use Illuminate\Database\Eloquent\Model;

class Continent extends Model
{
    use EarthTrait;

    protected $table = 'earth_continents';

    protected $fillable = ['name', 'code'];

    public $timestamps = false;

    // Relationships
    public function countries()
    {
        return $this->hasMany(Country::class);
    }

    public function regions()
    {
        return $this->hasManyThrough(Region::class, Country::class);
    }
}

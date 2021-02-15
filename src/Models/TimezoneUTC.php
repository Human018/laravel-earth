<?php

namespace Human018\LaravelEarth\Models;

use Illuminate\Database\Eloquent\Model;

class TimezoneUTC extends Model
{
    protected $table = 'earth_timezone_utc';

    protected $fillable = ['earth_timezone_id', 'name'];

    public $timestamps = false;

    // Relationships
    public function timezone()
    {
        return $this->belongsTo(Timezone::class, 'earth_timezone_id');
    }

    public function countries()
    {
        return $this->belongsToMany(Country::class,
            'earth_timezone_utc_country',
            'earth_timezone_utc_id',
        'earth_country_id');
    }
}

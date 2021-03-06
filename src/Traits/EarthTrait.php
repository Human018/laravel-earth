<?php

namespace Human018\LaravelEarth\Traits;

trait EarthTrait
{
    // Mutators
    public function setCodeAttribute($code)
    {
        $this->attributes['code'] = strtolower($code);
    }

    // Scopes
    public static function code($code = null)
    {
        return (new static)::where('code', strtolower($code))->first();
    }

    public static function name($name = null)
    {
        return (new static)::where('name', $name)->first();
    }
}
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
    public static function code($code)
    {
        return (new static)::firstOrNew(['code' => strtolower($code)]);
    }

    public static function name($name)
    {
        return (new static)::firstOrNew(['name' => $name]);
    }
}
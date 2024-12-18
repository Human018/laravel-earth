<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('earth_continents', function (Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::create('earth_countries', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::create('earth_regions', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::create('earth_cities', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::create('earth_languages', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::create('earth_currencies', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::create('earth_area_language', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::create('earth_country_currency', function(Blueprint $table)
        {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('earth_continents', function (Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::create('earth_countries', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::create('earth_regions', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::create('earth_cities', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::create('earth_languages', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::create('earth_currencies', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::create('earth_area_language', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::create('earth_country_currency', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });
    }
};

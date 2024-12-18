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
        Schema::table('earth_continents', function (Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::table('earth_countries', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::table('earth_regions', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::table('earth_cities', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::table('earth_languages', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::table('earth_currencies', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::table('earth_area_language', function(Blueprint $table)
        {
            $table->timestamps();
        });

        Schema::table('earth_country_currency', function(Blueprint $table)
        {
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('earth_continents', function (Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::table('earth_countries', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::table('earth_regions', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::table('earth_cities', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::table('earth_languages', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::table('earth_currencies', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::table('earth_area_language', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });

        Schema::table('earth_country_currency', function(Blueprint $table)
        {
            $table->dropTimestamps();
        });
    }
};

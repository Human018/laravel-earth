<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEarthTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earth_continents', function (Blueprint $table) {
            $table->id();
            $table->string('name', 16)->default('');
            $table->string('code', 2)->default('');
        });

        Schema::create('earth_countries', function(Blueprint $table)
        {
            $table->id();
            $table->integer('continent_id')->nullable();
            $table->string('name', 255)->default('');
            $table->string('code', 2)->nullable();
            $table->string('iso3', 3)->nullable();
            $table->string('tld', 8)->nullable();
            $table->string('calling_code', 8)->nullable();
        });

        Schema::create('earth_regions', function(Blueprint $table)
        {
            $table->id();
            $table->bigInteger('country_id')->unsigned();
            $table->string('name', 255)->default('');
            $table->string('code', 64)->nullable();
        });

        Schema::create('earth_cities', function(Blueprint $table)
        {
            $table->id();
            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('region_id')->unsigned()->nullable();
            $table->string('name', 255)->default('');
            $table->string('code', 64)->nullable();
            $table->boolean('country_capital')->nullable();
            $table->boolean('region_capital')->nullable();
        });

        Schema::create('earth_languages', function(Blueprint $table)
        {
            $table->id();
            $table->string('name', 255);
            $table->string('code', 2)->nullable();
            $table->string('iso3', 3)->nullable();
        });

        Schema::create('earth_currencies', function(Blueprint $table)
        {
            $table->id();
            $table->string('code', 10)->nullable();
            $table->string('name', 255)->nullable();
            $table->string('symbol', 5)->nullable();
        });

        Schema::create('earth_area_language', function(Blueprint $table)
        {
            $table->integer('earth_language_id');
            $table->integer('area_id');
            $table->string('area_type', 255);
            $table->boolean('primary')->nullable();
        });

        Schema::create('earth_country_currency', function(Blueprint $table)
        {
            $table->integer('earth_country_id');
            $table->integer('earth_currency_id');
            $table->boolean('primary')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('earth_continents');
        Schema::dropIfExists('earth_countries');
        Schema::dropIfExists('earth_regions');
        Schema::dropIfExists('earth_cities');
        Schema::dropIfExists('earth_languages');
        Schema::dropIfExists('earth_currencies');
        Schema::dropIfExists('earth_area_language');
        Schema::dropIfExists('earth_country_currency');
    }
}

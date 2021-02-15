<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimezoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('earth_timezones', function (Blueprint $table) {
            $table->id();
            $table->string('name', 191)->default('');
            $table->string('label', 191)->default('');
            $table->string('abbreviation', 10)->default('');
            $table->tinyInteger('offset')->default(0);
        });

        Schema::create('earth_timezone_utc', function (Blueprint $table) {
            $table->id();
            $table->integer('earth_timezone_id');
            $table->string('name', 191)->default('');
        });

        Schema::create('earth_timezone_utc_country', function (Blueprint $table) {
            $table->integer('earth_timezone_utc_id');
            $table->integer('earth_country_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('earth_timezones');
        Schema::dropIfExists('earth_timezone_utc');
        Schema::dropIfExists('earth_timezone_utc_country');
    }
}

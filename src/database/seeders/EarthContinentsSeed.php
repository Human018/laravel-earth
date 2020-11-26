<?php

namespace Human018\LaravelEarth\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EarthContinentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('earth_continents')->truncate();

        DB::table('earth_continents')->insert([
            0 => 
                [
                    'code' => 'as',
                    'id' => 1,
                    'name' => 'Asia',
                ],
            1 =>
                [
                    'code' => 'eu',
                    'id' => 2,
                    'name' => 'Europe',
                ],
            2 =>
                [
                    'code' => 'af',
                    'id' => 3,
                    'name' => 'Africa',
                ],
            3 =>
                [
                    'code' => 'oc',
                    'id' => 4,
                    'name' => 'Oceania',
                ],
            4 =>
                [
                    'code' => 'an',
                    'id' => 5,
                    'name' => 'Antarctica',
                ],
            5 =>
                [
                    'code' => 'am',
                    'id' => 6,
                    'name' => 'Americas',
                ],
        ]);
    }
}

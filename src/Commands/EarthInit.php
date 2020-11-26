<?php

namespace Human018\LaravelEarth\Commands;

use GuzzleHttp\Client;
use Human018\LaravelEarth\Models\City;
use Human018\LaravelEarth\Models\Continent;
use Human018\LaravelEarth\Models\Country;
use Human018\LaravelEarth\Models\Currency;
use Human018\LaravelEarth\Models\Language;
use Human018\LaravelEarth\Models\Region;
use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class EarthInit extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'earth:init {--country=null}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialise the Earth seed';

    public $country_endpoint = 'https://restcountries.eu/rest/v2/all';
    public $region_endpoint = 'vendor/npm-asset/country-region-data/data.json';
    public $city_endpoint = 'http://download.geonames.org/export/dump/';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->info('Seeding Continents');
        $this->seedContinents();

        $this->info('Seeding Rest Country Data');
        $this->seedCountries();

        $this->info('Seeding Json Region Data');
        $this->seedRegions();

        if($this->option('country')) {
            $this->seedCities();
        }

    }

    public function seedContinents()
    {
        $this->call('db:seed', [
            '--class' => '\Human018\LaravelEarth\database\seeders\EarthContinentsSeed'
        ]);
    }

    public function seedCountries()
    {
        $client = new Client();
        $res = $client->request('GET', $this->country_endpoint);

        $body = $res->getBody();
        $countries = json_decode($body, true);

        foreach($countries as $c) {
            $country = Country::firstOrNew(
                ['code' => strtolower($c['alpha2Code'])],
                ['name' => $c['name'], 'iso3' => strtolower($c['alpha3Code'])]
            );

            if(count($c['callingCodes'])) {
                $country->calling_code = array_shift($c['callingCodes']);
            }

            if(count($c['topLevelDomain'])) {
                $country->tld = array_shift($c['topLevelDomain']);
            }

            if($continent = Continent::name($c['region'])) {
                $country->continent_id = $continent->id;
            }

            $country->save();

            if($c['capital']) {
                City::firstOrCreate(
                    ['country_id' => $country->id, 'name' => $c['capital']],
                    ['country_capital' => 1]
                );
            }

            foreach($c['currencies'] as $id => $currency) {
                $currency = Currency::firstOrCreate(
                    ['code' => $currency['code'], 'name' => $currency['name']],
                    ['symbol' => $currency['symbol']]
                );

                $country->currencies()->attach($currency->id, ['primary' => $id === 0 ? 1 : 0]);
            }

            foreach($c['languages'] as $id => $language) {
                $language = Language::firstOrCreate(
                    ['code' => $language['iso639_1'], 'name' => $language['name']],
                    ['iso3' => $language['iso639_2']]
                );

                $country->languages()->attach($language->id, ['primary' => $id === 0 ? 1 : 0]);
            }
        }
    }

    public function seedRegions()
    {
        if(File::exists(base_path($this->region_endpoint))) {
            $data = file_get_contents(base_path($this->region_endpoint));
            $countries = json_decode($data, true);

            foreach($countries as $country) {
                if($c = Country::code($country['countryShortCode'])) {
                    foreach ($country['regions'] as $region) {
                        Region::firstOrCreate(
                            ['country_id' => $c->id, 'name' => $region['name']],
                            ['code' => $region['shortCode'] ?? '']
                        );
                    }
                }
            }
        }
    }

    public function seedCities()
    {
        $countryCodes = explode(',', $this->option('country'));
        foreach($countryCodes as $code) {
            if ($country = Country::code($code)) {
                $this->info('Seeding City Data for ' . $country->name);
                $filename = storage_path('citydata.zip');
                $adminCodes = storage_path('adminCodes.txt');
                copy($this->city_endpoint . strtoupper($country->code) . '.zip', $filename);
                copy($this->city_endpoint . 'admin1CodesASCII.txt', $adminCodes);

                $data = file_get_contents($adminCodes);
                $lines = explode("\n", $data);
                $codes = new Collection();
                foreach ($lines as $line) {
                    $col = explode("\t", $line);
                    if (count($col) >= 2) {
                        $codes->put($col[0], $col[1]);
                    }
                }

                $zip = new \ZipArchive();
                if ($res = $zip->open($filename)) {
                    $zip->extractTo(storage_path());
                    $zip->close();

                    $data = file_get_contents(storage_path(strtoupper($country->code) . '.txt'));
                    $lines = explode("\n", $data);

                    $bar = $this->output->createProgressBar(count($lines));
                    $bar->start();

                    foreach ($lines as $line) {
                        $col = explode("\t", $line);
                        if(count($col) >= 10) {
                            if ($adminZone = $codes->get($col[8] . '.' . $col[10])) {
                                if ($region = Region::name($adminZone)) {
                                    City::firstOrCreate(
                                        ['country_id' => $country->id, 'name' => $col[1]],
                                        ['region_id' => $region->id, 'code' => $col[7]]
                                    );
                                }
                            }
                        }
                        $bar->advance();
                    }
                    $bar->finish();
                }

                Storage::delete($filename);
                Storage::delete($adminCodes);
                Storage::delete(storage_path(strtoupper($country->code) . '.txt'));
            }
        }
    }
}

[![Contributors][contributors-shield]][contributors-url]
[![Forks][forks-shield]][forks-url]
[![Stargazers][stars-shield]][stars-url]
[![Issues][issues-shield]][issues-url]
[![MIT License][license-shield]][license-url]

<!-- TABLE OF CONTENTS -->
<details open="open">
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
    <li><a href="#contributing">Contributing</a></li>
    <li><a href="#license">License</a></li>
    <li><a href="#contact">Contact</a></li>
    <li><a href="#acknowledgements">Acknowledgements</a></li>
  </ol>
</details>

<!-- ABOUT THE PROJECT -->
## About The Project
A multilingual Laravel package to populate continents, countries, regions, cities, languages and currencies for planet earth.


### Built With

* PHP
* [Laravel](https://laravel.com)

<!-- GETTING STARTED -->
## Getting Started

This project is built using Laravel 8 and is not currently backwards compatible with older versions.

### Prerequisites

* PHP 7.4
* Laravel 8
* Guzzle
* ZipArchive

Because this library uses an NPM package as one of it's data sources, you will need to allow composer to download an NPM package. To do so add the following property (or append to the already existing property) to the `repositories` array/object in your composer.json file.
```json
    "repositories": [
        {
            "type": "composer",
            "url": "https://asset-packagist.org"
        }
    ]
```


### Installation

1. Using composer install the package to your project.
   ```PHP
   composer require human018/laravel-earth
   ```
2. Run database migration.
   ```PHP
   php artisan migrate
   ```
3. This package seeds the database with various sources (listed below) so an initialisation script need to be run in order to access these third-party sources and seed your database.
   ```PHP
   php artisan earth:init
   ```
   
4. (_Optional_) If you want to seed all the cities in a certain country pass in the country code. Note that this may take a long time depending on the country you're seeding.
    ```PHP
   php artisan earth:init --country=au
   ```
   
4. (_Optional_) You can also seed all major cities (over 15,000 in pop.).
    ```PHP
   php artisan earth:init --cities=major
   ```
<!-- USAGE EXAMPLES -->
## Usage
All models are located in the same namespace and can be imported into your local project.
```PHP
use Human018\LaravelEarth\Models\Continent;
use Human018\LaravelEarth\Models\Country;
use Human018\LaravelEarth\Models\Region;
use Human018\LaravelEarth\Models\City;
use Human018\LaravelEarth\Models\Language;
use Human018\LaravelEarth\Models\Currency;
use Human018\LaravelEarth\Models\Timezone;
use Human018\LaravelEarth\Models\TimezoneUTC;
``` 

A couple of helpful methods for finding the correct resource are included. This means the resource name or code can be used to quickly locate a resource.
Additionally, relationships between models are connected in a standard way and can be chained like usual.
```PHP
// eg 1. Retrieve country by code 
$country = Country::code('au');
echo $country->regions->count();
// Returns '8'

// eg 2. Code case is automatically handled for you
$country = Country::code('AU');

// Eg 3. You can also search by name
$region = Region::name('New South Wales');
echo $region->country->name;
// Returns 'Australia'

echo $region->country->capital->name;
// Returns 'Canberra'
``` 

Retrieving timezones are slightly more complicated. Currently timezones are connected to Countries rather than Regions or Cities. Because a country can have multiple UTC zones, and in turn those zones can belong to the same Timezone, retrieving the relationship just requires us to use the unique query modifier.

```PHP
$country = Country::code('ca'); // Canada
$country->timezones->pluck('label');
// Returns duplicates because it's unique UTC zones
// belong to many of the same Timezones

$country->timezones->unique()->pluck('label');
// Returns only unique timezones
```

<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.

<!-- CONTACT -->
## Contact

Simon Woodard - [@human018](https://twitter.com/human018)

Project Link: [https://github.com/Human018/laravel-earth](https://github.com/Human018/laravel-earth)

<!-- ACKNOWLEDGEMENTS -->
## Acknowledgements
* [REST COUNTRIES](https://restcountries.eu/)
* [country-region-data](https://github.com/country-regions/country-region-data)
* [GeoNames](http://www.geonames.org/)

<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/human018/laravel-earth.svg?style=for-the-badge
[contributors-url]: https://github.com/Human018/laravel-earth/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/human018/laravel-earth.svg?style=for-the-badge
[forks-url]: https://github.com/Human018/laravel-earth/network/members
[stars-shield]: https://img.shields.io/github/stars/human018/laravel-earth.svg?style=for-the-badge
[stars-url]: https://github.com/Human018/laravel-earth/stargazers
[issues-shield]: https://img.shields.io/github/issues/human018/laravel-earth.svg?style=for-the-badge
[issues-url]: https://github.com/Human018/laravel-earth/issues
[license-shield]: https://img.shields.io/github/license/human018/laravel-earth.svg?style=for-the-badge
[license-url]: https://github.com/Human018/laravel-earth/blob/main/LICENSE
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
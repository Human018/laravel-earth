<?php

namespace Human018\LaravelEarth\database\seeders;

use Illuminate\Database\Seeder;

class EarthTimezoneUtcTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('earth_timezone_utc')->delete();
        
        \DB::table('earth_timezone_utc')->insert(array (
            0 => 
            array (
                'id' => 3,
                'earth_timezone_id' => 2,
                'name' => 'Pacific/Midway',
            ),
            1 => 
            array (
                'id' => 4,
                'earth_timezone_id' => 2,
                'name' => 'Pacific/Niue',
            ),
            2 => 
            array (
                'id' => 5,
                'earth_timezone_id' => 2,
                'name' => 'Pacific/Pago_Pago',
            ),
            3 => 
            array (
                'id' => 7,
                'earth_timezone_id' => 3,
                'name' => 'Pacific/Honolulu',
            ),
            4 => 
            array (
                'id' => 8,
                'earth_timezone_id' => 3,
                'name' => 'Pacific/Johnston',
            ),
            5 => 
            array (
                'id' => 9,
                'earth_timezone_id' => 3,
                'name' => 'Pacific/Rarotonga',
            ),
            6 => 
            array (
                'id' => 10,
                'earth_timezone_id' => 3,
                'name' => 'Pacific/Tahiti',
            ),
            7 => 
            array (
                'id' => 11,
                'earth_timezone_id' => 4,
                'name' => 'America/Anchorage',
            ),
            8 => 
            array (
                'id' => 12,
                'earth_timezone_id' => 4,
                'name' => 'America/Juneau',
            ),
            9 => 
            array (
                'id' => 13,
                'earth_timezone_id' => 4,
                'name' => 'America/Nome',
            ),
            10 => 
            array (
                'id' => 14,
                'earth_timezone_id' => 4,
                'name' => 'America/Sitka',
            ),
            11 => 
            array (
                'id' => 15,
                'earth_timezone_id' => 4,
                'name' => 'America/Yakutat',
            ),
            12 => 
            array (
                'id' => 16,
                'earth_timezone_id' => 5,
                'name' => 'America/Santa_Isabel',
            ),
            13 => 
            array (
                'id' => 17,
                'earth_timezone_id' => 6,
                'name' => 'America/Dawson',
            ),
            14 => 
            array (
                'id' => 18,
                'earth_timezone_id' => 6,
                'name' => 'America/Los_Angeles',
            ),
            15 => 
            array (
                'id' => 19,
                'earth_timezone_id' => 6,
                'name' => 'America/Tijuana',
            ),
            16 => 
            array (
                'id' => 20,
                'earth_timezone_id' => 6,
                'name' => 'America/Vancouver',
            ),
            17 => 
            array (
                'id' => 21,
                'earth_timezone_id' => 6,
                'name' => 'America/Whitehorse',
            ),
            18 => 
            array (
                'id' => 28,
                'earth_timezone_id' => 8,
                'name' => 'America/Creston',
            ),
            19 => 
            array (
                'id' => 29,
                'earth_timezone_id' => 8,
                'name' => 'America/Dawson_Creek',
            ),
            20 => 
            array (
                'id' => 30,
                'earth_timezone_id' => 8,
                'name' => 'America/Hermosillo',
            ),
            21 => 
            array (
                'id' => 31,
                'earth_timezone_id' => 8,
                'name' => 'America/Phoenix',
            ),
            22 => 
            array (
                'id' => 33,
                'earth_timezone_id' => 9,
                'name' => 'America/Chihuahua',
            ),
            23 => 
            array (
                'id' => 34,
                'earth_timezone_id' => 9,
                'name' => 'America/Mazatlan',
            ),
            24 => 
            array (
                'id' => 35,
                'earth_timezone_id' => 10,
                'name' => 'America/Boise',
            ),
            25 => 
            array (
                'id' => 36,
                'earth_timezone_id' => 10,
                'name' => 'America/Cambridge_Bay',
            ),
            26 => 
            array (
                'id' => 37,
                'earth_timezone_id' => 10,
                'name' => 'America/Denver',
            ),
            27 => 
            array (
                'id' => 38,
                'earth_timezone_id' => 10,
                'name' => 'America/Edmonton',
            ),
            28 => 
            array (
                'id' => 39,
                'earth_timezone_id' => 10,
                'name' => 'America/Inuvik',
            ),
            29 => 
            array (
                'id' => 40,
                'earth_timezone_id' => 10,
                'name' => 'America/Ojinaga',
            ),
            30 => 
            array (
                'id' => 41,
                'earth_timezone_id' => 10,
                'name' => 'America/Yellowknife',
            ),
            31 => 
            array (
                'id' => 43,
                'earth_timezone_id' => 11,
                'name' => 'America/Belize',
            ),
            32 => 
            array (
                'id' => 44,
                'earth_timezone_id' => 11,
                'name' => 'America/Costa_Rica',
            ),
            33 => 
            array (
                'id' => 45,
                'earth_timezone_id' => 11,
                'name' => 'America/El_Salvador',
            ),
            34 => 
            array (
                'id' => 46,
                'earth_timezone_id' => 11,
                'name' => 'America/Guatemala',
            ),
            35 => 
            array (
                'id' => 47,
                'earth_timezone_id' => 11,
                'name' => 'America/Managua',
            ),
            36 => 
            array (
                'id' => 48,
                'earth_timezone_id' => 11,
                'name' => 'America/Tegucigalpa',
            ),
            37 => 
            array (
                'id' => 50,
                'earth_timezone_id' => 11,
                'name' => 'Pacific/Galapagos',
            ),
            38 => 
            array (
                'id' => 51,
                'earth_timezone_id' => 12,
                'name' => 'America/Chicago',
            ),
            39 => 
            array (
                'id' => 52,
                'earth_timezone_id' => 12,
                'name' => 'America/Indiana/Knox',
            ),
            40 => 
            array (
                'id' => 53,
                'earth_timezone_id' => 12,
                'name' => 'America/Indiana/Tell_City',
            ),
            41 => 
            array (
                'id' => 54,
                'earth_timezone_id' => 12,
                'name' => 'America/Matamoros',
            ),
            42 => 
            array (
                'id' => 55,
                'earth_timezone_id' => 12,
                'name' => 'America/Menominee',
            ),
            43 => 
            array (
                'id' => 56,
                'earth_timezone_id' => 12,
                'name' => 'America/North_Dakota/Beulah',
            ),
            44 => 
            array (
                'id' => 57,
                'earth_timezone_id' => 12,
                'name' => 'America/North_Dakota/Center',
            ),
            45 => 
            array (
                'id' => 58,
                'earth_timezone_id' => 12,
                'name' => 'America/North_Dakota/New_Salem',
            ),
            46 => 
            array (
                'id' => 59,
                'earth_timezone_id' => 12,
                'name' => 'America/Rainy_River',
            ),
            47 => 
            array (
                'id' => 60,
                'earth_timezone_id' => 12,
                'name' => 'America/Rankin_Inlet',
            ),
            48 => 
            array (
                'id' => 61,
                'earth_timezone_id' => 12,
                'name' => 'America/Resolute',
            ),
            49 => 
            array (
                'id' => 62,
                'earth_timezone_id' => 12,
                'name' => 'America/Winnipeg',
            ),
            50 => 
            array (
                'id' => 64,
                'earth_timezone_id' => 13,
                'name' => 'America/Bahia_Banderas',
            ),
            51 => 
            array (
                'id' => 65,
                'earth_timezone_id' => 13,
                'name' => 'America/Cancun',
            ),
            52 => 
            array (
                'id' => 66,
                'earth_timezone_id' => 13,
                'name' => 'America/Merida',
            ),
            53 => 
            array (
                'id' => 67,
                'earth_timezone_id' => 13,
                'name' => 'America/Mexico_City',
            ),
            54 => 
            array (
                'id' => 68,
                'earth_timezone_id' => 13,
                'name' => 'America/Monterrey',
            ),
            55 => 
            array (
                'id' => 69,
                'earth_timezone_id' => 14,
                'name' => 'America/Regina',
            ),
            56 => 
            array (
                'id' => 70,
                'earth_timezone_id' => 14,
                'name' => 'America/Swift_Current',
            ),
            57 => 
            array (
                'id' => 71,
                'earth_timezone_id' => 15,
                'name' => 'America/Bogota',
            ),
            58 => 
            array (
                'id' => 72,
                'earth_timezone_id' => 15,
                'name' => 'America/Cayman',
            ),
            59 => 
            array (
                'id' => 73,
                'earth_timezone_id' => 15,
                'name' => 'America/Coral_Harbour',
            ),
            60 => 
            array (
                'id' => 74,
                'earth_timezone_id' => 15,
                'name' => 'America/Eirunepe',
            ),
            61 => 
            array (
                'id' => 75,
                'earth_timezone_id' => 15,
                'name' => 'America/Guayaquil',
            ),
            62 => 
            array (
                'id' => 76,
                'earth_timezone_id' => 15,
                'name' => 'America/Jamaica',
            ),
            63 => 
            array (
                'id' => 77,
                'earth_timezone_id' => 15,
                'name' => 'America/Lima',
            ),
            64 => 
            array (
                'id' => 78,
                'earth_timezone_id' => 15,
                'name' => 'America/Panama',
            ),
            65 => 
            array (
                'id' => 79,
                'earth_timezone_id' => 15,
                'name' => 'America/Rio_Branco',
            ),
            66 => 
            array (
                'id' => 81,
                'earth_timezone_id' => 16,
                'name' => 'America/Detroit',
            ),
            67 => 
            array (
                'id' => 82,
                'earth_timezone_id' => 16,
                'name' => 'America/Havana',
            ),
            68 => 
            array (
                'id' => 83,
                'earth_timezone_id' => 16,
                'name' => 'America/Indiana/Petersburg',
            ),
            69 => 
            array (
                'id' => 84,
                'earth_timezone_id' => 16,
                'name' => 'America/Indiana/Vincennes',
            ),
            70 => 
            array (
                'id' => 85,
                'earth_timezone_id' => 16,
                'name' => 'America/Indiana/Winamac',
            ),
            71 => 
            array (
                'id' => 86,
                'earth_timezone_id' => 16,
                'name' => 'America/Iqaluit',
            ),
            72 => 
            array (
                'id' => 87,
                'earth_timezone_id' => 16,
                'name' => 'America/Kentucky/Monticello',
            ),
            73 => 
            array (
                'id' => 88,
                'earth_timezone_id' => 16,
                'name' => 'America/Louisville',
            ),
            74 => 
            array (
                'id' => 89,
                'earth_timezone_id' => 16,
                'name' => 'America/Montreal',
            ),
            75 => 
            array (
                'id' => 90,
                'earth_timezone_id' => 16,
                'name' => 'America/Nassau',
            ),
            76 => 
            array (
                'id' => 91,
                'earth_timezone_id' => 16,
                'name' => 'America/New_York',
            ),
            77 => 
            array (
                'id' => 92,
                'earth_timezone_id' => 16,
                'name' => 'America/Nipigon',
            ),
            78 => 
            array (
                'id' => 93,
                'earth_timezone_id' => 16,
                'name' => 'America/Pangnirtung',
            ),
            79 => 
            array (
                'id' => 94,
                'earth_timezone_id' => 16,
                'name' => 'America/Port-au-Prince',
            ),
            80 => 
            array (
                'id' => 95,
                'earth_timezone_id' => 16,
                'name' => 'America/Thunder_Bay',
            ),
            81 => 
            array (
                'id' => 96,
                'earth_timezone_id' => 16,
                'name' => 'America/Toronto',
            ),
            82 => 
            array (
                'id' => 98,
                'earth_timezone_id' => 17,
                'name' => 'America/Indiana/Marengo',
            ),
            83 => 
            array (
                'id' => 99,
                'earth_timezone_id' => 17,
                'name' => 'America/Indiana/Vevay',
            ),
            84 => 
            array (
                'id' => 100,
                'earth_timezone_id' => 17,
                'name' => 'America/Indianapolis',
            ),
            85 => 
            array (
                'id' => 101,
                'earth_timezone_id' => 18,
                'name' => 'America/Caracas',
            ),
            86 => 
            array (
                'id' => 102,
                'earth_timezone_id' => 19,
                'name' => 'America/Asuncion',
            ),
            87 => 
            array (
                'id' => 103,
                'earth_timezone_id' => 20,
                'name' => 'America/Glace_Bay',
            ),
            88 => 
            array (
                'id' => 104,
                'earth_timezone_id' => 20,
                'name' => 'America/Goose_Bay',
            ),
            89 => 
            array (
                'id' => 105,
                'earth_timezone_id' => 20,
                'name' => 'America/Halifax',
            ),
            90 => 
            array (
                'id' => 106,
                'earth_timezone_id' => 20,
                'name' => 'America/Moncton',
            ),
            91 => 
            array (
                'id' => 107,
                'earth_timezone_id' => 20,
                'name' => 'America/Thule',
            ),
            92 => 
            array (
                'id' => 108,
                'earth_timezone_id' => 20,
                'name' => 'Atlantic/Bermuda',
            ),
            93 => 
            array (
                'id' => 109,
                'earth_timezone_id' => 21,
                'name' => 'America/Campo_Grande',
            ),
            94 => 
            array (
                'id' => 110,
                'earth_timezone_id' => 21,
                'name' => 'America/Cuiaba',
            ),
            95 => 
            array (
                'id' => 111,
                'earth_timezone_id' => 22,
                'name' => 'America/Anguilla',
            ),
            96 => 
            array (
                'id' => 112,
                'earth_timezone_id' => 22,
                'name' => 'America/Antigua',
            ),
            97 => 
            array (
                'id' => 113,
                'earth_timezone_id' => 22,
                'name' => 'America/Aruba',
            ),
            98 => 
            array (
                'id' => 114,
                'earth_timezone_id' => 22,
                'name' => 'America/Barbados',
            ),
            99 => 
            array (
                'id' => 115,
                'earth_timezone_id' => 22,
                'name' => 'America/Blanc-Sablon',
            ),
            100 => 
            array (
                'id' => 116,
                'earth_timezone_id' => 22,
                'name' => 'America/Boa_Vista',
            ),
            101 => 
            array (
                'id' => 117,
                'earth_timezone_id' => 22,
                'name' => 'America/Curacao',
            ),
            102 => 
            array (
                'id' => 118,
                'earth_timezone_id' => 22,
                'name' => 'America/Dominica',
            ),
            103 => 
            array (
                'id' => 119,
                'earth_timezone_id' => 22,
                'name' => 'America/Grand_Turk',
            ),
            104 => 
            array (
                'id' => 120,
                'earth_timezone_id' => 22,
                'name' => 'America/Grenada',
            ),
            105 => 
            array (
                'id' => 121,
                'earth_timezone_id' => 22,
                'name' => 'America/Guadeloupe',
            ),
            106 => 
            array (
                'id' => 122,
                'earth_timezone_id' => 22,
                'name' => 'America/Guyana',
            ),
            107 => 
            array (
                'id' => 123,
                'earth_timezone_id' => 22,
                'name' => 'America/Kralendijk',
            ),
            108 => 
            array (
                'id' => 124,
                'earth_timezone_id' => 22,
                'name' => 'America/La_Paz',
            ),
            109 => 
            array (
                'id' => 125,
                'earth_timezone_id' => 22,
                'name' => 'America/Lower_Princes',
            ),
            110 => 
            array (
                'id' => 126,
                'earth_timezone_id' => 22,
                'name' => 'America/Manaus',
            ),
            111 => 
            array (
                'id' => 127,
                'earth_timezone_id' => 22,
                'name' => 'America/Marigot',
            ),
            112 => 
            array (
                'id' => 128,
                'earth_timezone_id' => 22,
                'name' => 'America/Martinique',
            ),
            113 => 
            array (
                'id' => 129,
                'earth_timezone_id' => 22,
                'name' => 'America/Montserrat',
            ),
            114 => 
            array (
                'id' => 130,
                'earth_timezone_id' => 22,
                'name' => 'America/Port_of_Spain',
            ),
            115 => 
            array (
                'id' => 131,
                'earth_timezone_id' => 22,
                'name' => 'America/Porto_Velho',
            ),
            116 => 
            array (
                'id' => 132,
                'earth_timezone_id' => 22,
                'name' => 'America/Puerto_Rico',
            ),
            117 => 
            array (
                'id' => 133,
                'earth_timezone_id' => 22,
                'name' => 'America/Santo_Domingo',
            ),
            118 => 
            array (
                'id' => 134,
                'earth_timezone_id' => 22,
                'name' => 'America/St_Barthelemy',
            ),
            119 => 
            array (
                'id' => 135,
                'earth_timezone_id' => 22,
                'name' => 'America/St_Kitts',
            ),
            120 => 
            array (
                'id' => 136,
                'earth_timezone_id' => 22,
                'name' => 'America/St_Lucia',
            ),
            121 => 
            array (
                'id' => 137,
                'earth_timezone_id' => 22,
                'name' => 'America/St_Thomas',
            ),
            122 => 
            array (
                'id' => 138,
                'earth_timezone_id' => 22,
                'name' => 'America/St_Vincent',
            ),
            123 => 
            array (
                'id' => 139,
                'earth_timezone_id' => 22,
                'name' => 'America/Tortola',
            ),
            124 => 
            array (
                'id' => 141,
                'earth_timezone_id' => 23,
                'name' => 'America/Santiago',
            ),
            125 => 
            array (
                'id' => 142,
                'earth_timezone_id' => 23,
                'name' => 'Antarctica/Palmer',
            ),
            126 => 
            array (
                'id' => 143,
                'earth_timezone_id' => 24,
                'name' => 'America/St_Johns',
            ),
            127 => 
            array (
                'id' => 144,
                'earth_timezone_id' => 25,
                'name' => 'America/Sao_Paulo',
            ),
            128 => 
            array (
                'id' => 145,
                'earth_timezone_id' => 26,
                'name' => 'America/Argentina/La_Rioja',
            ),
            129 => 
            array (
                'id' => 146,
                'earth_timezone_id' => 26,
                'name' => 'America/Argentina/Rio_Gallegos',
            ),
            130 => 
            array (
                'id' => 147,
                'earth_timezone_id' => 26,
                'name' => 'America/Argentina/Salta',
            ),
            131 => 
            array (
                'id' => 148,
                'earth_timezone_id' => 26,
                'name' => 'America/Argentina/San_Juan',
            ),
            132 => 
            array (
                'id' => 149,
                'earth_timezone_id' => 26,
                'name' => 'America/Argentina/San_Luis',
            ),
            133 => 
            array (
                'id' => 150,
                'earth_timezone_id' => 26,
                'name' => 'America/Argentina/Tucuman',
            ),
            134 => 
            array (
                'id' => 151,
                'earth_timezone_id' => 26,
                'name' => 'America/Argentina/Ushuaia',
            ),
            135 => 
            array (
                'id' => 152,
                'earth_timezone_id' => 26,
                'name' => 'America/Buenos_Aires',
            ),
            136 => 
            array (
                'id' => 153,
                'earth_timezone_id' => 26,
                'name' => 'America/Catamarca',
            ),
            137 => 
            array (
                'id' => 154,
                'earth_timezone_id' => 26,
                'name' => 'America/Cordoba',
            ),
            138 => 
            array (
                'id' => 155,
                'earth_timezone_id' => 26,
                'name' => 'America/Jujuy',
            ),
            139 => 
            array (
                'id' => 156,
                'earth_timezone_id' => 26,
                'name' => 'America/Mendoza',
            ),
            140 => 
            array (
                'id' => 157,
                'earth_timezone_id' => 27,
                'name' => 'America/Araguaina',
            ),
            141 => 
            array (
                'id' => 158,
                'earth_timezone_id' => 27,
                'name' => 'America/Belem',
            ),
            142 => 
            array (
                'id' => 159,
                'earth_timezone_id' => 27,
                'name' => 'America/Cayenne',
            ),
            143 => 
            array (
                'id' => 160,
                'earth_timezone_id' => 27,
                'name' => 'America/Fortaleza',
            ),
            144 => 
            array (
                'id' => 161,
                'earth_timezone_id' => 27,
                'name' => 'America/Maceio',
            ),
            145 => 
            array (
                'id' => 162,
                'earth_timezone_id' => 27,
                'name' => 'America/Paramaribo',
            ),
            146 => 
            array (
                'id' => 163,
                'earth_timezone_id' => 27,
                'name' => 'America/Recife',
            ),
            147 => 
            array (
                'id' => 164,
                'earth_timezone_id' => 27,
                'name' => 'America/Santarem',
            ),
            148 => 
            array (
                'id' => 165,
                'earth_timezone_id' => 27,
                'name' => 'Antarctica/Rothera',
            ),
            149 => 
            array (
                'id' => 166,
                'earth_timezone_id' => 27,
                'name' => 'Atlantic/Stanley',
            ),
            150 => 
            array (
                'id' => 168,
                'earth_timezone_id' => 28,
                'name' => 'America/Godthab',
            ),
            151 => 
            array (
                'id' => 169,
                'earth_timezone_id' => 29,
                'name' => 'America/Montevideo',
            ),
            152 => 
            array (
                'id' => 170,
                'earth_timezone_id' => 30,
                'name' => 'America/Bahia',
            ),
            153 => 
            array (
                'id' => 171,
                'earth_timezone_id' => 31,
                'name' => 'America/Noronha',
            ),
            154 => 
            array (
                'id' => 172,
                'earth_timezone_id' => 31,
                'name' => 'Atlantic/South_Georgia',
            ),
            155 => 
            array (
                'id' => 174,
                'earth_timezone_id' => 33,
                'name' => 'America/Scoresbysund',
            ),
            156 => 
            array (
                'id' => 175,
                'earth_timezone_id' => 33,
                'name' => 'Atlantic/Azores',
            ),
            157 => 
            array (
                'id' => 176,
                'earth_timezone_id' => 34,
                'name' => 'Atlantic/Cape_Verde',
            ),
            158 => 
            array (
                'id' => 178,
                'earth_timezone_id' => 35,
                'name' => 'Africa/Casablanca',
            ),
            159 => 
            array (
                'id' => 179,
                'earth_timezone_id' => 35,
                'name' => 'Africa/El_Aaiun',
            ),
            160 => 
            array (
                'id' => 180,
                'earth_timezone_id' => 36,
                'name' => 'America/Danmarkshavn',
            ),
            161 => 
            array (
                'id' => 182,
                'earth_timezone_id' => 37,
                'name' => 'Europe/Isle_of_Man',
            ),
            162 => 
            array (
                'id' => 183,
                'earth_timezone_id' => 37,
                'name' => 'Europe/Guernsey',
            ),
            163 => 
            array (
                'id' => 184,
                'earth_timezone_id' => 37,
                'name' => 'Europe/Jersey',
            ),
            164 => 
            array (
                'id' => 185,
                'earth_timezone_id' => 37,
                'name' => 'Europe/London',
            ),
            165 => 
            array (
                'id' => 190,
                'earth_timezone_id' => 39,
                'name' => 'Atlantic/Canary',
            ),
            166 => 
            array (
                'id' => 191,
                'earth_timezone_id' => 39,
                'name' => 'Atlantic/Faeroe',
            ),
            167 => 
            array (
                'id' => 192,
                'earth_timezone_id' => 39,
                'name' => 'Atlantic/Madeira',
            ),
            168 => 
            array (
                'id' => 193,
                'earth_timezone_id' => 39,
                'name' => 'Europe/Dublin',
            ),
            169 => 
            array (
                'id' => 194,
                'earth_timezone_id' => 39,
                'name' => 'Europe/Lisbon',
            ),
            170 => 
            array (
                'id' => 195,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Abidjan',
            ),
            171 => 
            array (
                'id' => 196,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Accra',
            ),
            172 => 
            array (
                'id' => 197,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Bamako',
            ),
            173 => 
            array (
                'id' => 198,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Banjul',
            ),
            174 => 
            array (
                'id' => 199,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Bissau',
            ),
            175 => 
            array (
                'id' => 200,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Conakry',
            ),
            176 => 
            array (
                'id' => 201,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Dakar',
            ),
            177 => 
            array (
                'id' => 202,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Freetown',
            ),
            178 => 
            array (
                'id' => 203,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Lome',
            ),
            179 => 
            array (
                'id' => 204,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Monrovia',
            ),
            180 => 
            array (
                'id' => 205,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Nouakchott',
            ),
            181 => 
            array (
                'id' => 206,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Ouagadougou',
            ),
            182 => 
            array (
                'id' => 207,
                'earth_timezone_id' => 40,
                'name' => 'Africa/Sao_Tome',
            ),
            183 => 
            array (
                'id' => 208,
                'earth_timezone_id' => 40,
                'name' => 'Atlantic/Reykjavik',
            ),
            184 => 
            array (
                'id' => 209,
                'earth_timezone_id' => 40,
                'name' => 'Atlantic/St_Helena',
            ),
            185 => 
            array (
                'id' => 210,
                'earth_timezone_id' => 41,
                'name' => 'Arctic/Longyearbyen',
            ),
            186 => 
            array (
                'id' => 211,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Amsterdam',
            ),
            187 => 
            array (
                'id' => 212,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Andorra',
            ),
            188 => 
            array (
                'id' => 213,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Berlin',
            ),
            189 => 
            array (
                'id' => 214,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Busingen',
            ),
            190 => 
            array (
                'id' => 215,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Gibraltar',
            ),
            191 => 
            array (
                'id' => 216,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Luxembourg',
            ),
            192 => 
            array (
                'id' => 217,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Malta',
            ),
            193 => 
            array (
                'id' => 218,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Monaco',
            ),
            194 => 
            array (
                'id' => 219,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Oslo',
            ),
            195 => 
            array (
                'id' => 220,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Rome',
            ),
            196 => 
            array (
                'id' => 221,
                'earth_timezone_id' => 41,
                'name' => 'Europe/San_Marino',
            ),
            197 => 
            array (
                'id' => 222,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Stockholm',
            ),
            198 => 
            array (
                'id' => 223,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Vaduz',
            ),
            199 => 
            array (
                'id' => 224,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Vatican',
            ),
            200 => 
            array (
                'id' => 225,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Vienna',
            ),
            201 => 
            array (
                'id' => 226,
                'earth_timezone_id' => 41,
                'name' => 'Europe/Zurich',
            ),
            202 => 
            array (
                'id' => 227,
                'earth_timezone_id' => 42,
                'name' => 'Europe/Belgrade',
            ),
            203 => 
            array (
                'id' => 228,
                'earth_timezone_id' => 42,
                'name' => 'Europe/Bratislava',
            ),
            204 => 
            array (
                'id' => 229,
                'earth_timezone_id' => 42,
                'name' => 'Europe/Budapest',
            ),
            205 => 
            array (
                'id' => 230,
                'earth_timezone_id' => 42,
                'name' => 'Europe/Ljubljana',
            ),
            206 => 
            array (
                'id' => 231,
                'earth_timezone_id' => 42,
                'name' => 'Europe/Podgorica',
            ),
            207 => 
            array (
                'id' => 232,
                'earth_timezone_id' => 42,
                'name' => 'Europe/Prague',
            ),
            208 => 
            array (
                'id' => 233,
                'earth_timezone_id' => 42,
                'name' => 'Europe/Tirane',
            ),
            209 => 
            array (
                'id' => 234,
                'earth_timezone_id' => 43,
                'name' => 'Africa/Ceuta',
            ),
            210 => 
            array (
                'id' => 235,
                'earth_timezone_id' => 43,
                'name' => 'Europe/Brussels',
            ),
            211 => 
            array (
                'id' => 236,
                'earth_timezone_id' => 43,
                'name' => 'Europe/Copenhagen',
            ),
            212 => 
            array (
                'id' => 237,
                'earth_timezone_id' => 43,
                'name' => 'Europe/Madrid',
            ),
            213 => 
            array (
                'id' => 238,
                'earth_timezone_id' => 43,
                'name' => 'Europe/Paris',
            ),
            214 => 
            array (
                'id' => 239,
                'earth_timezone_id' => 44,
                'name' => 'Europe/Sarajevo',
            ),
            215 => 
            array (
                'id' => 240,
                'earth_timezone_id' => 44,
                'name' => 'Europe/Skopje',
            ),
            216 => 
            array (
                'id' => 241,
                'earth_timezone_id' => 44,
                'name' => 'Europe/Warsaw',
            ),
            217 => 
            array (
                'id' => 242,
                'earth_timezone_id' => 44,
                'name' => 'Europe/Zagreb',
            ),
            218 => 
            array (
                'id' => 243,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Algiers',
            ),
            219 => 
            array (
                'id' => 244,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Bangui',
            ),
            220 => 
            array (
                'id' => 245,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Brazzaville',
            ),
            221 => 
            array (
                'id' => 246,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Douala',
            ),
            222 => 
            array (
                'id' => 247,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Kinshasa',
            ),
            223 => 
            array (
                'id' => 248,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Lagos',
            ),
            224 => 
            array (
                'id' => 249,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Libreville',
            ),
            225 => 
            array (
                'id' => 250,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Luanda',
            ),
            226 => 
            array (
                'id' => 251,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Malabo',
            ),
            227 => 
            array (
                'id' => 252,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Ndjamena',
            ),
            228 => 
            array (
                'id' => 253,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Niamey',
            ),
            229 => 
            array (
                'id' => 254,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Porto-Novo',
            ),
            230 => 
            array (
                'id' => 255,
                'earth_timezone_id' => 45,
                'name' => 'Africa/Tunis',
            ),
            231 => 
            array (
                'id' => 257,
                'earth_timezone_id' => 46,
                'name' => 'Africa/Windhoek',
            ),
            232 => 
            array (
                'id' => 258,
                'earth_timezone_id' => 47,
                'name' => 'Asia/Nicosia',
            ),
            233 => 
            array (
                'id' => 260,
                'earth_timezone_id' => 47,
                'name' => 'Europe/Bucharest',
            ),
            234 => 
            array (
                'id' => 261,
                'earth_timezone_id' => 47,
                'name' => 'Europe/Chisinau',
            ),
            235 => 
            array (
                'id' => 262,
                'earth_timezone_id' => 48,
                'name' => 'Asia/Beirut',
            ),
            236 => 
            array (
                'id' => 263,
                'earth_timezone_id' => 49,
                'name' => 'Africa/Cairo',
            ),
            237 => 
            array (
                'id' => 264,
                'earth_timezone_id' => 50,
                'name' => 'Asia/Damascus',
            ),
            238 => 
            array (
                'id' => 266,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Athens',
            ),
            239 => 
            array (
                'id' => 269,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Helsinki',
            ),
            240 => 
            array (
                'id' => 270,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Kiev',
            ),
            241 => 
            array (
                'id' => 271,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Mariehamn',
            ),
            242 => 
            array (
                'id' => 272,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Nicosia',
            ),
            243 => 
            array (
                'id' => 273,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Riga',
            ),
            244 => 
            array (
                'id' => 274,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Sofia',
            ),
            245 => 
            array (
                'id' => 275,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Tallinn',
            ),
            246 => 
            array (
                'id' => 276,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Uzhgorod',
            ),
            247 => 
            array (
                'id' => 277,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Vilnius',
            ),
            248 => 
            array (
                'id' => 278,
                'earth_timezone_id' => 51,
                'name' => 'Europe/Zaporozhye',
            ),
            249 => 
            array (
                'id' => 279,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Blantyre',
            ),
            250 => 
            array (
                'id' => 280,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Bujumbura',
            ),
            251 => 
            array (
                'id' => 281,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Gaborone',
            ),
            252 => 
            array (
                'id' => 282,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Harare',
            ),
            253 => 
            array (
                'id' => 283,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Johannesburg',
            ),
            254 => 
            array (
                'id' => 284,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Kigali',
            ),
            255 => 
            array (
                'id' => 285,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Lubumbashi',
            ),
            256 => 
            array (
                'id' => 286,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Lusaka',
            ),
            257 => 
            array (
                'id' => 287,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Maputo',
            ),
            258 => 
            array (
                'id' => 288,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Maseru',
            ),
            259 => 
            array (
                'id' => 289,
                'earth_timezone_id' => 52,
                'name' => 'Africa/Mbabane',
            ),
            260 => 
            array (
                'id' => 300,
                'earth_timezone_id' => 54,
                'name' => 'Europe/Istanbul',
            ),
            261 => 
            array (
                'id' => 301,
                'earth_timezone_id' => 55,
                'name' => 'Asia/Jerusalem',
            ),
            262 => 
            array (
                'id' => 302,
                'earth_timezone_id' => 56,
                'name' => 'Africa/Tripoli',
            ),
            263 => 
            array (
                'id' => 303,
                'earth_timezone_id' => 57,
                'name' => 'Asia/Amman',
            ),
            264 => 
            array (
                'id' => 304,
                'earth_timezone_id' => 58,
                'name' => 'Asia/Baghdad',
            ),
            265 => 
            array (
                'id' => 305,
                'earth_timezone_id' => 59,
                'name' => 'Europe/Kaliningrad',
            ),
            266 => 
            array (
                'id' => 306,
                'earth_timezone_id' => 60,
                'name' => 'Asia/Aden',
            ),
            267 => 
            array (
                'id' => 307,
                'earth_timezone_id' => 60,
                'name' => 'Asia/Bahrain',
            ),
            268 => 
            array (
                'id' => 308,
                'earth_timezone_id' => 60,
                'name' => 'Asia/Kuwait',
            ),
            269 => 
            array (
                'id' => 309,
                'earth_timezone_id' => 60,
                'name' => 'Asia/Qatar',
            ),
            270 => 
            array (
                'id' => 310,
                'earth_timezone_id' => 60,
                'name' => 'Asia/Riyadh',
            ),
            271 => 
            array (
                'id' => 311,
                'earth_timezone_id' => 61,
                'name' => 'Africa/Addis_Ababa',
            ),
            272 => 
            array (
                'id' => 312,
                'earth_timezone_id' => 61,
                'name' => 'Africa/Asmera',
            ),
            273 => 
            array (
                'id' => 313,
                'earth_timezone_id' => 61,
                'name' => 'Africa/Dar_es_Salaam',
            ),
            274 => 
            array (
                'id' => 314,
                'earth_timezone_id' => 61,
                'name' => 'Africa/Djibouti',
            ),
            275 => 
            array (
                'id' => 315,
                'earth_timezone_id' => 61,
                'name' => 'Africa/Juba',
            ),
            276 => 
            array (
                'id' => 316,
                'earth_timezone_id' => 61,
                'name' => 'Africa/Kampala',
            ),
            277 => 
            array (
                'id' => 317,
                'earth_timezone_id' => 61,
                'name' => 'Africa/Khartoum',
            ),
            278 => 
            array (
                'id' => 318,
                'earth_timezone_id' => 61,
                'name' => 'Africa/Mogadishu',
            ),
            279 => 
            array (
                'id' => 319,
                'earth_timezone_id' => 61,
                'name' => 'Africa/Nairobi',
            ),
            280 => 
            array (
                'id' => 320,
                'earth_timezone_id' => 61,
                'name' => 'Antarctica/Syowa',
            ),
            281 => 
            array (
                'id' => 322,
                'earth_timezone_id' => 61,
                'name' => 'Indian/Antananarivo',
            ),
            282 => 
            array (
                'id' => 323,
                'earth_timezone_id' => 61,
                'name' => 'Indian/Comoro',
            ),
            283 => 
            array (
                'id' => 324,
                'earth_timezone_id' => 61,
                'name' => 'Indian/Mayotte',
            ),
            284 => 
            array (
                'id' => 325,
                'earth_timezone_id' => 62,
                'name' => 'Europe/Kirov',
            ),
            285 => 
            array (
                'id' => 326,
                'earth_timezone_id' => 62,
                'name' => 'Europe/Moscow',
            ),
            286 => 
            array (
                'id' => 327,
                'earth_timezone_id' => 62,
                'name' => 'Europe/Simferopol',
            ),
            287 => 
            array (
                'id' => 328,
                'earth_timezone_id' => 62,
                'name' => 'Europe/Volgograd',
            ),
            288 => 
            array (
                'id' => 329,
                'earth_timezone_id' => 62,
                'name' => 'Europe/Minsk',
            ),
            289 => 
            array (
                'id' => 330,
                'earth_timezone_id' => 63,
                'name' => 'Europe/Astrakhan',
            ),
            290 => 
            array (
                'id' => 331,
                'earth_timezone_id' => 63,
                'name' => 'Europe/Samara',
            ),
            291 => 
            array (
                'id' => 332,
                'earth_timezone_id' => 63,
                'name' => 'Europe/Ulyanovsk',
            ),
            292 => 
            array (
                'id' => 333,
                'earth_timezone_id' => 64,
                'name' => 'Asia/Tehran',
            ),
            293 => 
            array (
                'id' => 334,
                'earth_timezone_id' => 65,
                'name' => 'Asia/Dubai',
            ),
            294 => 
            array (
                'id' => 335,
                'earth_timezone_id' => 65,
                'name' => 'Asia/Muscat',
            ),
            295 => 
            array (
                'id' => 337,
                'earth_timezone_id' => 66,
                'name' => 'Asia/Baku',
            ),
            296 => 
            array (
                'id' => 338,
                'earth_timezone_id' => 67,
                'name' => 'Indian/Mahe',
            ),
            297 => 
            array (
                'id' => 339,
                'earth_timezone_id' => 67,
                'name' => 'Indian/Mauritius',
            ),
            298 => 
            array (
                'id' => 340,
                'earth_timezone_id' => 67,
                'name' => 'Indian/Reunion',
            ),
            299 => 
            array (
                'id' => 341,
                'earth_timezone_id' => 68,
                'name' => 'Asia/Tbilisi',
            ),
            300 => 
            array (
                'id' => 342,
                'earth_timezone_id' => 69,
                'name' => 'Asia/Yerevan',
            ),
            301 => 
            array (
                'id' => 343,
                'earth_timezone_id' => 70,
                'name' => 'Asia/Kabul',
            ),
            302 => 
            array (
                'id' => 344,
                'earth_timezone_id' => 71,
                'name' => 'Antarctica/Mawson',
            ),
            303 => 
            array (
                'id' => 345,
                'earth_timezone_id' => 71,
                'name' => 'Asia/Aqtau',
            ),
            304 => 
            array (
                'id' => 346,
                'earth_timezone_id' => 71,
                'name' => 'Asia/Aqtobe',
            ),
            305 => 
            array (
                'id' => 347,
                'earth_timezone_id' => 71,
                'name' => 'Asia/Ashgabat',
            ),
            306 => 
            array (
                'id' => 348,
                'earth_timezone_id' => 71,
                'name' => 'Asia/Dushanbe',
            ),
            307 => 
            array (
                'id' => 349,
                'earth_timezone_id' => 71,
                'name' => 'Asia/Oral',
            ),
            308 => 
            array (
                'id' => 350,
                'earth_timezone_id' => 71,
                'name' => 'Asia/Samarkand',
            ),
            309 => 
            array (
                'id' => 351,
                'earth_timezone_id' => 71,
                'name' => 'Asia/Tashkent',
            ),
            310 => 
            array (
                'id' => 353,
                'earth_timezone_id' => 71,
                'name' => 'Indian/Kerguelen',
            ),
            311 => 
            array (
                'id' => 354,
                'earth_timezone_id' => 71,
                'name' => 'Indian/Maldives',
            ),
            312 => 
            array (
                'id' => 355,
                'earth_timezone_id' => 72,
                'name' => 'Asia/Yekaterinburg',
            ),
            313 => 
            array (
                'id' => 356,
                'earth_timezone_id' => 73,
                'name' => 'Asia/Karachi',
            ),
            314 => 
            array (
                'id' => 357,
                'earth_timezone_id' => 74,
                'name' => 'Asia/Kolkata',
            ),
            315 => 
            array (
                'id' => 358,
                'earth_timezone_id' => 75,
                'name' => 'Asia/Colombo',
            ),
            316 => 
            array (
                'id' => 359,
                'earth_timezone_id' => 76,
                'name' => 'Asia/Kathmandu',
            ),
            317 => 
            array (
                'id' => 360,
                'earth_timezone_id' => 77,
                'name' => 'Antarctica/Vostok',
            ),
            318 => 
            array (
                'id' => 361,
                'earth_timezone_id' => 77,
                'name' => 'Asia/Almaty',
            ),
            319 => 
            array (
                'id' => 362,
                'earth_timezone_id' => 77,
                'name' => 'Asia/Bishkek',
            ),
            320 => 
            array (
                'id' => 363,
                'earth_timezone_id' => 77,
                'name' => 'Asia/Qyzylorda',
            ),
            321 => 
            array (
                'id' => 364,
                'earth_timezone_id' => 77,
                'name' => 'Asia/Urumqi',
            ),
            322 => 
            array (
                'id' => 366,
                'earth_timezone_id' => 77,
                'name' => 'Indian/Chagos',
            ),
            323 => 
            array (
                'id' => 367,
                'earth_timezone_id' => 78,
                'name' => 'Asia/Dhaka',
            ),
            324 => 
            array (
                'id' => 368,
                'earth_timezone_id' => 78,
                'name' => 'Asia/Thimphu',
            ),
            325 => 
            array (
                'id' => 369,
                'earth_timezone_id' => 79,
                'name' => 'Asia/Rangoon',
            ),
            326 => 
            array (
                'id' => 370,
                'earth_timezone_id' => 79,
                'name' => 'Indian/Cocos',
            ),
            327 => 
            array (
                'id' => 371,
                'earth_timezone_id' => 80,
                'name' => 'Antarctica/Davis',
            ),
            328 => 
            array (
                'id' => 372,
                'earth_timezone_id' => 80,
                'name' => 'Asia/Bangkok',
            ),
            329 => 
            array (
                'id' => 373,
                'earth_timezone_id' => 80,
                'name' => 'Asia/Hovd',
            ),
            330 => 
            array (
                'id' => 374,
                'earth_timezone_id' => 80,
                'name' => 'Asia/Jakarta',
            ),
            331 => 
            array (
                'id' => 375,
                'earth_timezone_id' => 80,
                'name' => 'Asia/Phnom_Penh',
            ),
            332 => 
            array (
                'id' => 376,
                'earth_timezone_id' => 80,
                'name' => 'Asia/Pontianak',
            ),
            333 => 
            array (
                'id' => 377,
                'earth_timezone_id' => 80,
                'name' => 'Asia/Saigon',
            ),
            334 => 
            array (
                'id' => 378,
                'earth_timezone_id' => 80,
                'name' => 'Asia/Vientiane',
            ),
            335 => 
            array (
                'id' => 380,
                'earth_timezone_id' => 80,
                'name' => 'Indian/Christmas',
            ),
            336 => 
            array (
                'id' => 381,
                'earth_timezone_id' => 81,
                'name' => 'Asia/Novokuznetsk',
            ),
            337 => 
            array (
                'id' => 382,
                'earth_timezone_id' => 81,
                'name' => 'Asia/Novosibirsk',
            ),
            338 => 
            array (
                'id' => 383,
                'earth_timezone_id' => 81,
                'name' => 'Asia/Omsk',
            ),
            339 => 
            array (
                'id' => 384,
                'earth_timezone_id' => 82,
                'name' => 'Asia/Hong_Kong',
            ),
            340 => 
            array (
                'id' => 385,
                'earth_timezone_id' => 82,
                'name' => 'Asia/Macau',
            ),
            341 => 
            array (
                'id' => 386,
                'earth_timezone_id' => 82,
                'name' => 'Asia/Shanghai',
            ),
            342 => 
            array (
                'id' => 387,
                'earth_timezone_id' => 83,
                'name' => 'Asia/Krasnoyarsk',
            ),
            343 => 
            array (
                'id' => 388,
                'earth_timezone_id' => 84,
                'name' => 'Asia/Brunei',
            ),
            344 => 
            array (
                'id' => 389,
                'earth_timezone_id' => 84,
                'name' => 'Asia/Kuala_Lumpur',
            ),
            345 => 
            array (
                'id' => 390,
                'earth_timezone_id' => 84,
                'name' => 'Asia/Kuching',
            ),
            346 => 
            array (
                'id' => 391,
                'earth_timezone_id' => 84,
                'name' => 'Asia/Makassar',
            ),
            347 => 
            array (
                'id' => 392,
                'earth_timezone_id' => 84,
                'name' => 'Asia/Manila',
            ),
            348 => 
            array (
                'id' => 393,
                'earth_timezone_id' => 84,
                'name' => 'Asia/Singapore',
            ),
            349 => 
            array (
                'id' => 395,
                'earth_timezone_id' => 85,
                'name' => 'Antarctica/Casey',
            ),
            350 => 
            array (
                'id' => 396,
                'earth_timezone_id' => 85,
                'name' => 'Australia/Perth',
            ),
            351 => 
            array (
                'id' => 397,
                'earth_timezone_id' => 86,
                'name' => 'Asia/Taipei',
            ),
            352 => 
            array (
                'id' => 398,
                'earth_timezone_id' => 87,
                'name' => 'Asia/Choibalsan',
            ),
            353 => 
            array (
                'id' => 399,
                'earth_timezone_id' => 87,
                'name' => 'Asia/Ulaanbaatar',
            ),
            354 => 
            array (
                'id' => 400,
                'earth_timezone_id' => 88,
                'name' => 'Asia/Irkutsk',
            ),
            355 => 
            array (
                'id' => 401,
                'earth_timezone_id' => 89,
                'name' => 'Asia/Dili',
            ),
            356 => 
            array (
                'id' => 402,
                'earth_timezone_id' => 89,
                'name' => 'Asia/Jayapura',
            ),
            357 => 
            array (
                'id' => 403,
                'earth_timezone_id' => 89,
                'name' => 'Asia/Tokyo',
            ),
            358 => 
            array (
                'id' => 405,
                'earth_timezone_id' => 89,
                'name' => 'Pacific/Palau',
            ),
            359 => 
            array (
                'id' => 406,
                'earth_timezone_id' => 90,
                'name' => 'Asia/Pyongyang',
            ),
            360 => 
            array (
                'id' => 407,
                'earth_timezone_id' => 90,
                'name' => 'Asia/Seoul',
            ),
            361 => 
            array (
                'id' => 408,
                'earth_timezone_id' => 91,
                'name' => 'Australia/Adelaide',
            ),
            362 => 
            array (
                'id' => 409,
                'earth_timezone_id' => 91,
                'name' => 'Australia/Broken_Hill',
            ),
            363 => 
            array (
                'id' => 410,
                'earth_timezone_id' => 92,
                'name' => 'Australia/Darwin',
            ),
            364 => 
            array (
                'id' => 411,
                'earth_timezone_id' => 93,
                'name' => 'Australia/Brisbane',
            ),
            365 => 
            array (
                'id' => 412,
                'earth_timezone_id' => 93,
                'name' => 'Australia/Lindeman',
            ),
            366 => 
            array (
                'id' => 413,
                'earth_timezone_id' => 94,
                'name' => 'Australia/Melbourne',
            ),
            367 => 
            array (
                'id' => 414,
                'earth_timezone_id' => 94,
                'name' => 'Australia/Sydney',
            ),
            368 => 
            array (
                'id' => 415,
                'earth_timezone_id' => 95,
                'name' => 'Antarctica/DumontDUrville',
            ),
            369 => 
            array (
                'id' => 417,
                'earth_timezone_id' => 95,
                'name' => 'Pacific/Guam',
            ),
            370 => 
            array (
                'id' => 418,
                'earth_timezone_id' => 95,
                'name' => 'Pacific/Port_Moresby',
            ),
            371 => 
            array (
                'id' => 419,
                'earth_timezone_id' => 95,
                'name' => 'Pacific/Saipan',
            ),
            372 => 
            array (
                'id' => 420,
                'earth_timezone_id' => 95,
                'name' => 'Pacific/Truk',
            ),
            373 => 
            array (
                'id' => 421,
                'earth_timezone_id' => 96,
                'name' => 'Australia/Currie',
            ),
            374 => 
            array (
                'id' => 422,
                'earth_timezone_id' => 96,
                'name' => 'Australia/Hobart',
            ),
            375 => 
            array (
                'id' => 423,
                'earth_timezone_id' => 97,
                'name' => 'Asia/Chita',
            ),
            376 => 
            array (
                'id' => 424,
                'earth_timezone_id' => 97,
                'name' => 'Asia/Khandyga',
            ),
            377 => 
            array (
                'id' => 425,
                'earth_timezone_id' => 97,
                'name' => 'Asia/Yakutsk',
            ),
            378 => 
            array (
                'id' => 426,
                'earth_timezone_id' => 98,
                'name' => 'Antarctica/Macquarie',
            ),
            379 => 
            array (
                'id' => 428,
                'earth_timezone_id' => 98,
                'name' => 'Pacific/Efate',
            ),
            380 => 
            array (
                'id' => 429,
                'earth_timezone_id' => 98,
                'name' => 'Pacific/Guadalcanal',
            ),
            381 => 
            array (
                'id' => 430,
                'earth_timezone_id' => 98,
                'name' => 'Pacific/Kosrae',
            ),
            382 => 
            array (
                'id' => 431,
                'earth_timezone_id' => 98,
                'name' => 'Pacific/Noumea',
            ),
            383 => 
            array (
                'id' => 432,
                'earth_timezone_id' => 98,
                'name' => 'Pacific/Ponape',
            ),
            384 => 
            array (
                'id' => 433,
                'earth_timezone_id' => 99,
                'name' => 'Asia/Sakhalin',
            ),
            385 => 
            array (
                'id' => 434,
                'earth_timezone_id' => 99,
                'name' => 'Asia/Ust-Nera',
            ),
            386 => 
            array (
                'id' => 435,
                'earth_timezone_id' => 99,
                'name' => 'Asia/Vladivostok',
            ),
            387 => 
            array (
                'id' => 436,
                'earth_timezone_id' => 100,
                'name' => 'Antarctica/McMurdo',
            ),
            388 => 
            array (
                'id' => 437,
                'earth_timezone_id' => 100,
                'name' => 'Pacific/Auckland',
            ),
            389 => 
            array (
                'id' => 439,
                'earth_timezone_id' => 101,
                'name' => 'Pacific/Funafuti',
            ),
            390 => 
            array (
                'id' => 440,
                'earth_timezone_id' => 101,
                'name' => 'Pacific/Kwajalein',
            ),
            391 => 
            array (
                'id' => 441,
                'earth_timezone_id' => 101,
                'name' => 'Pacific/Majuro',
            ),
            392 => 
            array (
                'id' => 442,
                'earth_timezone_id' => 101,
                'name' => 'Pacific/Nauru',
            ),
            393 => 
            array (
                'id' => 443,
                'earth_timezone_id' => 101,
                'name' => 'Pacific/Tarawa',
            ),
            394 => 
            array (
                'id' => 444,
                'earth_timezone_id' => 101,
                'name' => 'Pacific/Wake',
            ),
            395 => 
            array (
                'id' => 445,
                'earth_timezone_id' => 101,
                'name' => 'Pacific/Wallis',
            ),
            396 => 
            array (
                'id' => 446,
                'earth_timezone_id' => 102,
                'name' => 'Pacific/Fiji',
            ),
            397 => 
            array (
                'id' => 447,
                'earth_timezone_id' => 103,
                'name' => 'Asia/Anadyr',
            ),
            398 => 
            array (
                'id' => 448,
                'earth_timezone_id' => 103,
                'name' => 'Asia/Kamchatka',
            ),
            399 => 
            array (
                'id' => 449,
                'earth_timezone_id' => 103,
                'name' => 'Asia/Magadan',
            ),
            400 => 
            array (
                'id' => 450,
                'earth_timezone_id' => 103,
                'name' => 'Asia/Srednekolymsk',
            ),
            401 => 
            array (
                'id' => 453,
                'earth_timezone_id' => 105,
                'name' => 'Pacific/Enderbury',
            ),
            402 => 
            array (
                'id' => 454,
                'earth_timezone_id' => 105,
                'name' => 'Pacific/Fakaofo',
            ),
            403 => 
            array (
                'id' => 455,
                'earth_timezone_id' => 105,
                'name' => 'Pacific/Tongatapu',
            ),
            404 => 
            array (
                'id' => 456,
                'earth_timezone_id' => 106,
                'name' => 'Pacific/Apia',
            ),
        ));
        
        
    }
}
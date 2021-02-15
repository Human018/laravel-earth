<?php

namespace Human018\LaravelEarth\database\seeders;

use Illuminate\Database\Seeder;

class EarthTimezonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('earth_timezones')->delete();
        
        \DB::table('earth_timezones')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dateline Standard Time',
            'label' => '(UTC-12:00) International Date Line West',
                'abbreviation' => 'DST',
                'offset' => -12,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'UTC-11',
            'label' => '(UTC-11:00) Coordinated Universal Time-11',
                'abbreviation' => 'U',
                'offset' => -11,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Hawaiian Standard Time',
            'label' => '(UTC-10:00) Hawaii',
                'abbreviation' => 'HST',
                'offset' => -10,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Alaskan Standard Time',
            'label' => '(UTC-09:00) Alaska',
                'abbreviation' => 'AKDT',
                'offset' => -8,
            ),
            4 => 
            array (
                'id' => 5,
            'name' => 'Pacific Standard Time (Mexico)',
            'label' => '(UTC-08:00) Baja California',
                'abbreviation' => 'PDT',
                'offset' => -7,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Pacific Daylight Time',
            'label' => '(UTC-07:00) Pacific Time (US & Canada)',
                'abbreviation' => 'PDT',
                'offset' => -7,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Pacific Standard Time',
            'label' => '(UTC-08:00) Pacific Time (US & Canada)',
                'abbreviation' => 'PST',
                'offset' => -8,
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'US Mountain Standard Time',
            'label' => '(UTC-07:00) Arizona',
                'abbreviation' => 'UMST',
                'offset' => -7,
            ),
            8 => 
            array (
                'id' => 9,
            'name' => 'Mountain Standard Time (Mexico)',
            'label' => '(UTC-07:00) Chihuahua, La Paz, Mazatlan',
                'abbreviation' => 'MDT',
                'offset' => -6,
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Mountain Standard Time',
            'label' => '(UTC-07:00) Mountain Time (US & Canada)',
                'abbreviation' => 'MDT',
                'offset' => -6,
            ),
            10 => 
            array (
                'id' => 11,
                'name' => 'Central America Standard Time',
            'label' => '(UTC-06:00) Central America',
                'abbreviation' => 'CAST',
                'offset' => -6,
            ),
            11 => 
            array (
                'id' => 12,
                'name' => 'Central Standard Time',
            'label' => '(UTC-06:00) Central Time (US & Canada)',
                'abbreviation' => 'CDT',
                'offset' => -5,
            ),
            12 => 
            array (
                'id' => 13,
            'name' => 'Central Standard Time (Mexico)',
            'label' => '(UTC-06:00) Guadalajara, Mexico City, Monterrey',
                'abbreviation' => 'CDT',
                'offset' => -5,
            ),
            13 => 
            array (
                'id' => 14,
                'name' => 'Canada Central Standard Time',
            'label' => '(UTC-06:00) Saskatchewan',
                'abbreviation' => 'CCST',
                'offset' => -6,
            ),
            14 => 
            array (
                'id' => 15,
                'name' => 'SA Pacific Standard Time',
            'label' => '(UTC-05:00) Bogota, Lima, Quito',
                'abbreviation' => 'SPST',
                'offset' => -5,
            ),
            15 => 
            array (
                'id' => 16,
                'name' => 'Eastern Standard Time',
            'label' => '(UTC-05:00) Eastern Time (US & Canada)',
                'abbreviation' => 'EDT',
                'offset' => -4,
            ),
            16 => 
            array (
                'id' => 17,
                'name' => 'US Eastern Standard Time',
            'label' => '(UTC-05:00) Indiana (East)',
                'abbreviation' => 'UEDT',
                'offset' => -4,
            ),
            17 => 
            array (
                'id' => 18,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            18 => 
            array (
                'id' => 19,
                'name' => 'Paraguay Standard Time',
            'label' => '(UTC-04:00) Asuncion',
                'abbreviation' => 'PYT',
                'offset' => -4,
            ),
            19 => 
            array (
                'id' => 20,
                'name' => 'Atlantic Standard Time',
            'label' => '(UTC-04:00) Atlantic Time (Canada)',
                'abbreviation' => 'ADT',
                'offset' => -3,
            ),
            20 => 
            array (
                'id' => 21,
                'name' => 'Central Brazilian Standard Time',
            'label' => '(UTC-04:00) Cuiaba',
                'abbreviation' => 'CBST',
                'offset' => -4,
            ),
            21 => 
            array (
                'id' => 22,
                'name' => 'SA Western Standard Time',
            'label' => '(UTC-04:00) Georgetown, La Paz, Manaus, San Juan',
                'abbreviation' => 'SWST',
                'offset' => -4,
            ),
            22 => 
            array (
                'id' => 23,
                'name' => 'Pacific SA Standard Time',
            'label' => '(UTC-04:00) Santiago',
                'abbreviation' => 'PSST',
                'offset' => -4,
            ),
            23 => 
            array (
                'id' => 24,
                'name' => 'Newfoundland Standard Time',
            'label' => '(UTC-03:30) Newfoundland',
                'abbreviation' => 'NDT',
                'offset' => -3,
            ),
            24 => 
            array (
                'id' => 25,
                'name' => 'E. South America Standard Time',
            'label' => '(UTC-03:00) Brasilia',
                'abbreviation' => 'ESAST',
                'offset' => -3,
            ),
            25 => 
            array (
                'id' => 26,
                'name' => 'Argentina Standard Time',
            'label' => '(UTC-03:00) Buenos Aires',
                'abbreviation' => 'AST',
                'offset' => -3,
            ),
            26 => 
            array (
                'id' => 27,
                'name' => 'SA Eastern Standard Time',
            'label' => '(UTC-03:00) Cayenne, Fortaleza',
                'abbreviation' => 'SEST',
                'offset' => -3,
            ),
            27 => 
            array (
                'id' => 28,
                'name' => 'Greenland Standard Time',
            'label' => '(UTC-03:00) Greenland',
                'abbreviation' => 'GDT',
                'offset' => -3,
            ),
            28 => 
            array (
                'id' => 29,
                'name' => 'Montevideo Standard Time',
            'label' => '(UTC-03:00) Montevideo',
                'abbreviation' => 'MST',
                'offset' => -3,
            ),
            29 => 
            array (
                'id' => 30,
                'name' => 'Bahia Standard Time',
            'label' => '(UTC-03:00) Salvador',
                'abbreviation' => 'BST',
                'offset' => -3,
            ),
            30 => 
            array (
                'id' => 31,
                'name' => 'UTC-02',
            'label' => '(UTC-02:00) Coordinated Universal Time-02',
                'abbreviation' => 'U',
                'offset' => -2,
            ),
            31 => 
            array (
                'id' => 32,
                'name' => 'Mid-Atlantic Standard Time',
            'label' => '(UTC-02:00) Mid-Atlantic - Old',
                'abbreviation' => 'MDT',
                'offset' => -1,
            ),
            32 => 
            array (
                'id' => 33,
                'name' => 'Azores Standard Time',
            'label' => '(UTC-01:00) Azores',
                'abbreviation' => 'ADT',
                'offset' => 0,
            ),
            33 => 
            array (
                'id' => 34,
                'name' => 'Cape Verde Standard Time',
            'label' => '(UTC-01:00) Cape Verde Is.',
                'abbreviation' => 'CVST',
                'offset' => -1,
            ),
            34 => 
            array (
                'id' => 35,
                'name' => 'Morocco Standard Time',
            'label' => '(UTC) Casablanca',
                'abbreviation' => 'MDT',
                'offset' => 1,
            ),
            35 => 
            array (
                'id' => 36,
                'name' => 'UTC',
            'label' => '(UTC) Coordinated Universal Time',
                'abbreviation' => 'UTC',
                'offset' => 0,
            ),
            36 => 
            array (
                'id' => 37,
                'name' => 'GMT Standard Time',
            'label' => '(UTC) Edinburgh, London',
                'abbreviation' => 'GMT',
                'offset' => 0,
            ),
            37 => 
            array (
                'id' => 38,
                'name' => 'British Summer Time',
            'label' => '(UTC+01:00) Edinburgh, London',
                'abbreviation' => 'BST',
                'offset' => 1,
            ),
            38 => 
            array (
                'id' => 39,
                'name' => 'GMT Standard Time',
            'label' => '(UTC) Dublin, Lisbon',
                'abbreviation' => 'GDT',
                'offset' => 1,
            ),
            39 => 
            array (
                'id' => 40,
                'name' => 'Greenwich Standard Time',
            'label' => '(UTC) Monrovia, Reykjavik',
                'abbreviation' => 'GST',
                'offset' => 0,
            ),
            40 => 
            array (
                'id' => 41,
                'name' => 'W. Europe Standard Time',
            'label' => '(UTC+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna',
                'abbreviation' => 'WEDT',
                'offset' => 2,
            ),
            41 => 
            array (
                'id' => 42,
                'name' => 'Central Europe Standard Time',
            'label' => '(UTC+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague',
                'abbreviation' => 'CEDT',
                'offset' => 2,
            ),
            42 => 
            array (
                'id' => 43,
                'name' => 'Romance Standard Time',
            'label' => '(UTC+01:00) Brussels, Copenhagen, Madrid, Paris',
                'abbreviation' => 'RDT',
                'offset' => 2,
            ),
            43 => 
            array (
                'id' => 44,
                'name' => 'Central European Standard Time',
            'label' => '(UTC+01:00) Sarajevo, Skopje, Warsaw, Zagreb',
                'abbreviation' => 'CEDT',
                'offset' => 2,
            ),
            44 => 
            array (
                'id' => 45,
                'name' => 'W. Central Africa Standard Time',
            'label' => '(UTC+01:00) West Central Africa',
                'abbreviation' => 'WCAST',
                'offset' => 1,
            ),
            45 => 
            array (
                'id' => 46,
                'name' => 'Namibia Standard Time',
            'label' => '(UTC+01:00) Windhoek',
                'abbreviation' => 'NST',
                'offset' => 1,
            ),
            46 => 
            array (
                'id' => 47,
                'name' => 'GTB Standard Time',
            'label' => '(UTC+02:00) Athens, Bucharest',
                'abbreviation' => 'GDT',
                'offset' => 3,
            ),
            47 => 
            array (
                'id' => 48,
                'name' => 'Middle East Standard Time',
            'label' => '(UTC+02:00) Beirut',
                'abbreviation' => 'MEDT',
                'offset' => 3,
            ),
            48 => 
            array (
                'id' => 49,
                'name' => 'Egypt Standard Time',
            'label' => '(UTC+02:00) Cairo',
                'abbreviation' => 'EST',
                'offset' => 2,
            ),
            49 => 
            array (
                'id' => 50,
                'name' => 'Syria Standard Time',
            'label' => '(UTC+02:00) Damascus',
                'abbreviation' => 'SDT',
                'offset' => 3,
            ),
            50 => 
            array (
                'id' => 51,
                'name' => 'E. Europe Standard Time',
            'label' => '(UTC+02:00) E. Europe',
                'abbreviation' => 'EEDT',
                'offset' => 3,
            ),
            51 => 
            array (
                'id' => 52,
                'name' => 'South Africa Standard Time',
            'label' => '(UTC+02:00) Harare, Pretoria',
                'abbreviation' => 'SAST',
                'offset' => 2,
            ),
            52 => 
            array (
                'id' => 53,
                'name' => 'FLE Standard Time',
            'label' => '(UTC+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius',
                'abbreviation' => 'FDT',
                'offset' => 3,
            ),
            53 => 
            array (
                'id' => 54,
                'name' => 'Turkey Standard Time',
            'label' => '(UTC+03:00) Istanbul',
                'abbreviation' => 'TDT',
                'offset' => 3,
            ),
            54 => 
            array (
                'id' => 55,
                'name' => 'Israel Standard Time',
            'label' => '(UTC+02:00) Jerusalem',
                'abbreviation' => 'JDT',
                'offset' => 3,
            ),
            55 => 
            array (
                'id' => 56,
                'name' => 'Libya Standard Time',
            'label' => '(UTC+02:00) Tripoli',
                'abbreviation' => 'LST',
                'offset' => 2,
            ),
            56 => 
            array (
                'id' => 57,
                'name' => 'Jordan Standard Time',
            'label' => '(UTC+03:00) Amman',
                'abbreviation' => 'JST',
                'offset' => 3,
            ),
            57 => 
            array (
                'id' => 58,
                'name' => 'Arabic Standard Time',
            'label' => '(UTC+03:00) Baghdad',
                'abbreviation' => 'AST',
                'offset' => 3,
            ),
            58 => 
            array (
                'id' => 59,
                'name' => 'Kaliningrad Standard Time',
            'label' => '(UTC+02:00) Kaliningrad',
                'abbreviation' => 'KST',
                'offset' => 3,
            ),
            59 => 
            array (
                'id' => 60,
                'name' => 'Arab Standard Time',
            'label' => '(UTC+03:00) Kuwait, Riyadh',
                'abbreviation' => 'AST',
                'offset' => 3,
            ),
            60 => 
            array (
                'id' => 61,
                'name' => 'E. Africa Standard Time',
            'label' => '(UTC+03:00) Nairobi',
                'abbreviation' => 'EAST',
                'offset' => 3,
            ),
            61 => 
            array (
                'id' => 62,
                'name' => 'Moscow Standard Time',
            'label' => '(UTC+03:00) Moscow, St. Petersburg, Volgograd, Minsk',
                'abbreviation' => 'MSK',
                'offset' => 3,
            ),
            62 => 
            array (
                'id' => 63,
                'name' => 'Samara Time',
            'label' => '(UTC+04:00) Samara, Ulyanovsk, Saratov',
                'abbreviation' => 'SAMT',
                'offset' => 4,
            ),
            63 => 
            array (
                'id' => 64,
                'name' => 'Iran Standard Time',
            'label' => '(UTC+03:30) Tehran',
                'abbreviation' => 'IDT',
                'offset' => 5,
            ),
            64 => 
            array (
                'id' => 65,
                'name' => 'Arabian Standard Time',
            'label' => '(UTC+04:00) Abu Dhabi, Muscat',
                'abbreviation' => 'AST',
                'offset' => 4,
            ),
            65 => 
            array (
                'id' => 66,
                'name' => 'Azerbaijan Standard Time',
            'label' => '(UTC+04:00) Baku',
                'abbreviation' => 'ADT',
                'offset' => 5,
            ),
            66 => 
            array (
                'id' => 67,
                'name' => 'Mauritius Standard Time',
            'label' => '(UTC+04:00) Port Louis',
                'abbreviation' => 'MST',
                'offset' => 4,
            ),
            67 => 
            array (
                'id' => 68,
                'name' => 'Georgian Standard Time',
            'label' => '(UTC+04:00) Tbilisi',
                'abbreviation' => 'GET',
                'offset' => 4,
            ),
            68 => 
            array (
                'id' => 69,
                'name' => 'Caucasus Standard Time',
            'label' => '(UTC+04:00) Yerevan',
                'abbreviation' => 'CST',
                'offset' => 4,
            ),
            69 => 
            array (
                'id' => 70,
                'name' => 'Afghanistan Standard Time',
            'label' => '(UTC+04:30) Kabul',
                'abbreviation' => 'AST',
                'offset' => 5,
            ),
            70 => 
            array (
                'id' => 71,
                'name' => 'West Asia Standard Time',
            'label' => '(UTC+05:00) Ashgabat, Tashkent',
                'abbreviation' => 'WAST',
                'offset' => 5,
            ),
            71 => 
            array (
                'id' => 72,
                'name' => 'Yekaterinburg Time',
            'label' => '(UTC+05:00) Yekaterinburg',
                'abbreviation' => 'YEKT',
                'offset' => 5,
            ),
            72 => 
            array (
                'id' => 73,
                'name' => 'Pakistan Standard Time',
            'label' => '(UTC+05:00) Islamabad, Karachi',
                'abbreviation' => 'PKT',
                'offset' => 5,
            ),
            73 => 
            array (
                'id' => 74,
                'name' => 'India Standard Time',
            'label' => '(UTC+05:30) Chennai, Kolkata, Mumbai, New Delhi',
                'abbreviation' => 'IST',
                'offset' => 6,
            ),
            74 => 
            array (
                'id' => 75,
                'name' => 'Sri Lanka Standard Time',
            'label' => '(UTC+05:30) Sri Jayawardenepura',
                'abbreviation' => 'SLST',
                'offset' => 6,
            ),
            75 => 
            array (
                'id' => 76,
                'name' => 'Nepal Standard Time',
            'label' => '(UTC+05:45) Kathmandu',
                'abbreviation' => 'NST',
                'offset' => 6,
            ),
            76 => 
            array (
                'id' => 77,
                'name' => 'Central Asia Standard Time',
            'label' => '(UTC+06:00) Nur-Sultan (Astana)',
                'abbreviation' => 'CAST',
                'offset' => 6,
            ),
            77 => 
            array (
                'id' => 78,
                'name' => 'Bangladesh Standard Time',
            'label' => '(UTC+06:00) Dhaka',
                'abbreviation' => 'BST',
                'offset' => 6,
            ),
            78 => 
            array (
                'id' => 79,
                'name' => 'Myanmar Standard Time',
            'label' => '(UTC+06:30) Yangon (Rangoon)',
                'abbreviation' => 'MST',
                'offset' => 7,
            ),
            79 => 
            array (
                'id' => 80,
                'name' => 'SE Asia Standard Time',
            'label' => '(UTC+07:00) Bangkok, Hanoi, Jakarta',
                'abbreviation' => 'SAST',
                'offset' => 7,
            ),
            80 => 
            array (
                'id' => 81,
                'name' => 'N. Central Asia Standard Time',
            'label' => '(UTC+07:00) Novosibirsk',
                'abbreviation' => 'NCAST',
                'offset' => 7,
            ),
            81 => 
            array (
                'id' => 82,
                'name' => 'China Standard Time',
            'label' => '(UTC+08:00) Beijing, Chongqing, Hong Kong, Urumqi',
                'abbreviation' => 'CST',
                'offset' => 8,
            ),
            82 => 
            array (
                'id' => 83,
                'name' => 'North Asia Standard Time',
            'label' => '(UTC+08:00) Krasnoyarsk',
                'abbreviation' => 'NAST',
                'offset' => 8,
            ),
            83 => 
            array (
                'id' => 84,
                'name' => 'Singapore Standard Time',
            'label' => '(UTC+08:00) Kuala Lumpur, Singapore',
                'abbreviation' => 'MPST',
                'offset' => 8,
            ),
            84 => 
            array (
                'id' => 85,
                'name' => 'W. Australia Standard Time',
            'label' => '(UTC+08:00) Perth',
                'abbreviation' => 'WAST',
                'offset' => 8,
            ),
            85 => 
            array (
                'id' => 86,
                'name' => 'Taipei Standard Time',
            'label' => '(UTC+08:00) Taipei',
                'abbreviation' => 'TST',
                'offset' => 8,
            ),
            86 => 
            array (
                'id' => 87,
                'name' => 'Ulaanbaatar Standard Time',
            'label' => '(UTC+08:00) Ulaanbaatar',
                'abbreviation' => 'UST',
                'offset' => 8,
            ),
            87 => 
            array (
                'id' => 88,
                'name' => 'North Asia East Standard Time',
            'label' => '(UTC+08:00) Irkutsk',
                'abbreviation' => 'NAEST',
                'offset' => 8,
            ),
            88 => 
            array (
                'id' => 89,
                'name' => 'Japan Standard Time',
            'label' => '(UTC+09:00) Osaka, Sapporo, Tokyo',
                'abbreviation' => 'JST',
                'offset' => 9,
            ),
            89 => 
            array (
                'id' => 90,
                'name' => 'Korea Standard Time',
            'label' => '(UTC+09:00) Seoul',
                'abbreviation' => 'KST',
                'offset' => 9,
            ),
            90 => 
            array (
                'id' => 91,
                'name' => 'Cen. Australia Standard Time',
            'label' => '(UTC+09:30) Adelaide',
                'abbreviation' => 'CAST',
                'offset' => 10,
            ),
            91 => 
            array (
                'id' => 92,
                'name' => 'AUS Central Standard Time',
            'label' => '(UTC+09:30) Darwin',
                'abbreviation' => 'ACST',
                'offset' => 10,
            ),
            92 => 
            array (
                'id' => 93,
                'name' => 'E. Australia Standard Time',
            'label' => '(UTC+10:00) Brisbane',
                'abbreviation' => 'EAST',
                'offset' => 10,
            ),
            93 => 
            array (
                'id' => 94,
                'name' => 'AUS Eastern Standard Time',
            'label' => '(UTC+10:00) Canberra, Melbourne, Sydney',
                'abbreviation' => 'AEST',
                'offset' => 10,
            ),
            94 => 
            array (
                'id' => 95,
                'name' => 'West Pacific Standard Time',
            'label' => '(UTC+10:00) Guam, Port Moresby',
                'abbreviation' => 'WPST',
                'offset' => 10,
            ),
            95 => 
            array (
                'id' => 96,
                'name' => 'Tasmania Standard Time',
            'label' => '(UTC+10:00) Hobart',
                'abbreviation' => 'TST',
                'offset' => 10,
            ),
            96 => 
            array (
                'id' => 97,
                'name' => 'Yakutsk Standard Time',
            'label' => '(UTC+09:00) Yakutsk',
                'abbreviation' => 'YST',
                'offset' => 9,
            ),
            97 => 
            array (
                'id' => 98,
                'name' => 'Central Pacific Standard Time',
            'label' => '(UTC+11:00) Solomon Is., New Caledonia',
                'abbreviation' => 'CPST',
                'offset' => 11,
            ),
            98 => 
            array (
                'id' => 99,
                'name' => 'Vladivostok Standard Time',
            'label' => '(UTC+11:00) Vladivostok',
                'abbreviation' => 'VST',
                'offset' => 11,
            ),
            99 => 
            array (
                'id' => 100,
                'name' => 'New Zealand Standard Time',
            'label' => '(UTC+12:00) Auckland, Wellington',
                'abbreviation' => 'NZST',
                'offset' => 12,
            ),
            100 => 
            array (
                'id' => 101,
                'name' => 'UTC+12',
            'label' => '(UTC+12:00) Coordinated Universal Time+12',
                'abbreviation' => 'U',
                'offset' => 12,
            ),
            101 => 
            array (
                'id' => 102,
                'name' => 'Fiji Standard Time',
            'label' => '(UTC+12:00) Fiji',
                'abbreviation' => 'FST',
                'offset' => 12,
            ),
            102 => 
            array (
                'id' => 103,
                'name' => 'Magadan Standard Time',
            'label' => '(UTC+12:00) Magadan',
                'abbreviation' => 'MST',
                'offset' => 12,
            ),
            103 => 
            array (
                'id' => 104,
                'name' => 'Kamchatka Standard Time',
            'label' => '(UTC+12:00) Petropavlovsk-Kamchatsky - Old',
                'abbreviation' => 'KDT',
                'offset' => 13,
            ),
            104 => 
            array (
                'id' => 105,
                'name' => 'Tonga Standard Time',
            'label' => '(UTC+13:00) Nuku\'alofa',
                'abbreviation' => 'TST',
                'offset' => 13,
            ),
            105 => 
            array (
                'id' => 106,
                'name' => 'Samoa Standard Time',
            'label' => '(UTC+13:00) Samoa',
                'abbreviation' => 'SST',
                'offset' => 13,
            ),
            106 => 
            array (
                'id' => 107,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            107 => 
            array (
                'id' => 108,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            108 => 
            array (
                'id' => 109,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            109 => 
            array (
                'id' => 110,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            110 => 
            array (
                'id' => 111,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            111 => 
            array (
                'id' => 112,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            112 => 
            array (
                'id' => 113,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            113 => 
            array (
                'id' => 114,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            114 => 
            array (
                'id' => 115,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            115 => 
            array (
                'id' => 116,
                'name' => 'Newfoundland Standard Time',
            'label' => '(UTC-03:30) Newfoundland',
                'abbreviation' => 'NDT',
                'offset' => -3,
            ),
            116 => 
            array (
                'id' => 117,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            117 => 
            array (
                'id' => 118,
                'name' => 'Newfoundland Standard Time',
            'label' => '(UTC-03:30) Newfoundland',
                'abbreviation' => 'NDT',
                'offset' => -3,
            ),
            118 => 
            array (
                'id' => 119,
                'name' => 'Venezuela Standard Time',
            'label' => '(UTC-04:30) Caracas',
                'abbreviation' => 'VST',
                'offset' => -5,
            ),
            119 => 
            array (
                'id' => 120,
                'name' => 'Newfoundland Standard Time',
            'label' => '(UTC-03:30) Newfoundland',
                'abbreviation' => 'NDT',
                'offset' => -3,
            ),
        ));
        
        
    }
}
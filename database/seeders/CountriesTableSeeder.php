<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['id' => 181, 'countries_name' => 'Samoa', 'countries_iso_code' => 'WS', 'countries_isd_code' => '685', 'cou_sts' => 1],
            ['id' => 182, 'countries_name' => 'San Marino', 'countries_iso_code' => 'SM', 'countries_isd_code' => '378', 'cou_sts' => 1],
            ['id' => 183, 'countries_name' => 'Sao Tome and Principe', 'countries_iso_code' => 'ST', 'countries_isd_code' => '239', 'cou_sts' => 1],
            ['id' => 184, 'countries_name' => 'Saudi Arabia', 'countries_iso_code' => 'SA', 'countries_isd_code' => '966', 'cou_sts' => 1],
            ['id' => 185, 'countries_name' => 'Senegal', 'countries_iso_code' => 'SN', 'countries_isd_code' => '221', 'cou_sts' => 1],
            ['id' => 186, 'countries_name' => 'Seychelles', 'countries_iso_code' => 'SC', 'countries_isd_code' => '248', 'cou_sts' => 1],
            ['id' => 187, 'countries_name' => 'Sierra Leone', 'countries_iso_code' => 'SL', 'countries_isd_code' => '232', 'cou_sts' => 1],
            ['id' => 188, 'countries_name' => 'Singapore', 'countries_iso_code' => 'SG', 'countries_isd_code' => '65', 'cou_sts' => 1],
            ['id' => 189, 'countries_name' => 'Slovakia (Slovak Republic)', 'countries_iso_code' => 'SK', 'countries_isd_code' => '421', 'cou_sts' => 1],
            ['id' => 190, 'countries_name' => 'Slovenia', 'countries_iso_code' => 'SI', 'countries_isd_code' => '386', 'cou_sts' => 1],
            ['id' => 191, 'countries_name' => 'Solomon Islands', 'countries_iso_code' => 'SB', 'countries_isd_code' => '677', 'cou_sts' => 1],
            ['id' => 192, 'countries_name' => 'Somalia', 'countries_iso_code' => 'SO', 'countries_isd_code' => '252', 'cou_sts' => 1],
            ['id' => 193, 'countries_name' => 'South Africa', 'countries_iso_code' => 'ZA', 'countries_isd_code' => '27', 'cou_sts' => 1],
            ['id' => 194, 'countries_name' => 'South Georgia and the South Sandwich Islands', 'countries_iso_code' => 'GS', 'countries_isd_code' => '500', 'cou_sts' => 1],
            ['id' => 195, 'countries_name' => 'Spain', 'countries_iso_code' => 'ES', 'countries_isd_code' => '34', 'cou_sts' => 1],
            ['id' => 196, 'countries_name' => 'Sri Lanka', 'countries_iso_code' => 'LK', 'countries_isd_code' => '94', 'cou_sts' => 1],
            ['id' => 197, 'countries_name' => 'Saint Helena, Ascension and Tristan da Cunha', 'countries_iso_code' => 'SH', 'countries_isd_code' => '290', 'cou_sts' => 1],
            ['id' => 198, 'countries_name' => 'St. Pierre and Miquelon', 'countries_iso_code' => 'PM', 'countries_isd_code' => '508', 'cou_sts' => 1],
            ['id' => 199, 'countries_name' => 'Sudan', 'countries_iso_code' => 'SD', 'countries_isd_code' => '249', 'cou_sts' => 1],
            ['id' => 200, 'countries_name' => 'Suriname', 'countries_iso_code' => 'SR', 'countries_isd_code' => '597', 'cou_sts' => 1],
            ['id' => 201, 'countries_name' => 'Svalbard and Jan Mayen Islands', 'countries_iso_code' => 'SJ', 'countries_isd_code' => '47', 'cou_sts' => 1],
            ['id' => 202, 'countries_name' => 'Swaziland', 'countries_iso_code' => 'SZ', 'countries_isd_code' => '268', 'cou_sts' => 1],
            ['id' => 203, 'countries_name' => 'Sweden', 'countries_iso_code' => 'SE', 'countries_isd_code' => '46', 'cou_sts' => 1],
            ['id' => 204, 'countries_name' => 'Switzerland', 'countries_iso_code' => 'CH', 'countries_isd_code' => '41', 'cou_sts' => 1],
            ['id' => 205, 'countries_name' => 'Syrian Arab Republic', 'countries_iso_code' => 'SY', 'countries_isd_code' => '963', 'cou_sts' => 1],
            ['id' => 206, 'countries_name' => 'Taiwan', 'countries_iso_code' => 'TW', 'countries_isd_code' => '886', 'cou_sts' => 1],
            ['id' => 207, 'countries_name' => 'Tajikistan', 'countries_iso_code' => 'TJ', 'countries_isd_code' => '992', 'cou_sts' => 1],
            ['id' => 208, 'countries_name' => 'Tanzania, United Republic of', 'countries_iso_code' => 'TZ', 'countries_isd_code' => '255', 'cou_sts' => 1],
            ['id' => 209, 'countries_name' => 'Thailand', 'countries_iso_code' => 'TH', 'countries_isd_code' => '66', 'cou_sts' => 1],
            ['id' => 210, 'countries_name' => 'Togo', 'countries_iso_code' => 'TG', 'countries_isd_code' => '228', 'cou_sts' => 1],
            ['id' => 211, 'countries_name' => 'Tokelau', 'countries_iso_code' => 'TK', 'countries_isd_code' => '690', 'cou_sts' => 1],
            ['id' => 212, 'countries_name' => 'Tonga', 'countries_iso_code' => 'TO', 'countries_isd_code' => '676', 'cou_sts' => 1],
            ['id' => 213, 'countries_name' => 'Trinidad and Tobago', 'countries_iso_code' => 'TT', 'countries_isd_code' => '1-868', 'cou_sts' => 1],
            ['id' => 214, 'countries_name' => 'Tunisia', 'countries_iso_code' => 'TN', 'countries_isd_code' => '216', 'cou_sts' => 1],
            ['id' => 215, 'countries_name' => 'Turkey', 'countries_iso_code' => 'TR', 'countries_isd_code' => '90', 'cou_sts' => 1],
            ['id' => 216, 'countries_name' => 'Turkmenistan', 'countries_iso_code' => 'TM', 'countries_isd_code' => '993', 'cou_sts' => 1],
            ['id' => 217, 'countries_name' => 'Turks and Caicos Islands', 'countries_iso_code' => 'TC', 'countries_isd_code' => '1-649', 'cou_sts' => 1],
            ['id' => 218, 'countries_name' => 'Tuvalu', 'countries_iso_code' => 'TV', 'countries_isd_code' => '688', 'cou_sts' => 1],
            ['id' => 219, 'countries_name' => 'Uganda', 'countries_iso_code' => 'UG', 'countries_isd_code' => '256', 'cou_sts' => 1],
            ['id' => 220, 'countries_name' => 'Ukraine', 'countries_iso_code' => 'UA', 'countries_isd_code' => '380', 'cou_sts' => 1],
            ['id' => 221, 'countries_name' => 'United Arab Emirates', 'countries_iso_code' => 'AE', 'countries_isd_code' => '971', 'cou_sts' => 1],
            ['id' => 222, 'countries_name' => 'United Kingdom', 'countries_iso_code' => 'GB', 'countries_isd_code' => '44', 'cou_sts' => 1],
            ['id' => 223, 'countries_name' => 'United States', 'countries_iso_code' => 'US', 'countries_isd_code' => '1', 'cou_sts' => 1],
            ['id' => 224, 'countries_name' => 'United States Minor Outlying Islands', 'countries_iso_code' => 'UM', 'countries_isd_code' => '246', 'cou_sts' => 1],
            ['id' => 225, 'countries_name' => 'Uruguay', 'countries_iso_code' => 'UY', 'countries_isd_code' => '598', 'cou_sts' => 1],
            ['id' => 226, 'countries_name' => 'Uzbekistan', 'countries_iso_code' => 'UZ', 'countries_isd_code' => '998', 'cou_sts' => 1],
            ['id' => 227, 'countries_name' => 'Vanuatu', 'countries_iso_code' => 'VU', 'countries_isd_code' => '678', 'cou_sts' => 1],
            ['id' => 228, 'countries_name' => 'Vatican City State (Holy See)', 'countries_iso_code' => 'VA', 'countries_isd_code' => '379', 'cou_sts' => 1],
            ['id' => 229, 'countries_name' => 'Venezuela', 'countries_iso_code' => 'VE', 'countries_isd_code' => '58', 'cou_sts' => 1],
            ['id' => 230, 'countries_name' => 'Vietnam', 'countries_iso_code' => 'VN', 'countries_isd_code' => '84', 'cou_sts' => 1],
            ['id' => 231, 'countries_name' => 'Virgin Islands (British)', 'countries_iso_code' => 'VG', 'countries_isd_code' => '1-284', 'cou_sts' => 1],
            ['id' => 232, 'countries_name' => 'Virgin Islands (U.S.)', 'countries_iso_code' => 'VI', 'countries_isd_code' => '1-340', 'cou_sts' => 1],
            ['id' => 233, 'countries_name' => 'Wallis and Futuna Islands', 'countries_iso_code' => 'WF', 'countries_isd_code' => '681', 'cou_sts' => 1],
            ['id' => 234, 'countries_name' => 'Western Sahara', 'countries_iso_code' => 'EH', 'countries_isd_code' => '212', 'cou_sts' => 1],
            ['id' => 235, 'countries_name' => 'Yemen', 'countries_iso_code' => 'YE', 'countries_isd_code' => '967', 'cou_sts' => 1],
            ['id' => 236, 'countries_name' => 'Serbia', 'countries_iso_code' => 'RS', 'countries_isd_code' => '381', 'cou_sts' => 1],
            ['id' => 238, 'countries_name' => 'Zambia', 'countries_iso_code' => 'ZM', 'countries_isd_code' => '260', 'cou_sts' => 1],
            ['id' => 239, 'countries_name' => 'Zimbabwe', 'countries_iso_code' => 'ZW', 'countries_isd_code' => '263', 'cou_sts' => 1],
            ['id' => 240, 'countries_name' => 'Aaland Islands', 'countries_iso_code' => 'AX', 'countries_isd_code' => '358', 'cou_sts' => 1],
            ['id' => 241, 'countries_name' => 'Palestine', 'countries_iso_code' => 'PS', 'countries_isd_code' => '970', 'cou_sts' => 1],
            ['id' => 242, 'countries_name' => 'Montenegro', 'countries_iso_code' => 'ME', 'countries_isd_code' => '382', 'cou_sts' => 1],
            ['id' => 243, 'countries_name' => 'Guernsey', 'countries_iso_code' => 'GG', 'countries_isd_code' => '44-1481', 'cou_sts' => 1],
            ['id' => 244, 'countries_name' => 'Isle of Man', 'countries_iso_code' => 'IM', 'countries_isd_code' => '44-1624', 'cou_sts' => 1],
            ['id' => 245, 'countries_name' => 'Jersey', 'countries_iso_code' => 'JE', 'countries_isd_code' => '44-1534', 'cou_sts' => 1],
            ['id' => 247, 'countries_name' => 'Curaçao', 'countries_iso_code' => 'CW', 'countries_isd_code' => '599', 'cou_sts' => 1],
            ['id' => 248, 'countries_name' => 'Ivory Coast', 'countries_iso_code' => 'CI', 'countries_isd_code' => '225', 'cou_sts' => 1],
            ['id' => 249, 'countries_name' => 'Kosovo', 'countries_iso_code' => 'XK', 'countries_isd_code' => '383', 'cou_sts' => 1],

        ];

        DB::table('countries')->insert($countries);
    }
}

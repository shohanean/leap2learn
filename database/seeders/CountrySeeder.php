<?php
namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $countries = json_decode(
            file_get_contents(database_path('data/countries.json')),
            true
        );

        foreach ($countries as $country) {
            Country::updateOrCreate(
                ['iso2' => $country['iso2']],
                [
                    'name' => $country['name'],
                    'iso3' => $country['iso3'],
                    'phone_code' => $country['phone_code'],
                    'nationality' => $country['nationality'],
                    'status' => true,
                ]
            );
        }
    }
}
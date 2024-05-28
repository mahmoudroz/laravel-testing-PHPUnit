<?php

namespace Database\Seeders;

use App\Http\Controllers\Dashboard\StoreCountriesController;
use App\Models\Country;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new StoreCountriesController)->storeCountries();
//        Country::create([
//            'ar' => [
//                'name' => 'السعودية'
//            ],
//            'en' => [
//                'name' => 'Saudi Arabia'
//            ]
//        ]);
//        Country::create([
//            'ar' => [
//                'name' => 'مصر'
//            ],
//            'en' => [
//                'name' => 'Egypt'
//            ]
//        ]);

    } // end of run
}

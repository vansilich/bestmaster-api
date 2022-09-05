<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesVariationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_variations')->insert([
            'service_id' => 1,
            'duration' => 60,
            'price' => 4000,
            'link' => 'https://b689665.yclients.com/company/651678/menu?o=m1860233s9232674',
        ]);
        DB::table('services_variations')->insert([
            'service_id' => 1,
            'duration' => 90,
            'price' => 5000,
            'link' => 'https://b689665.yclients.com/company/651678/menu?o=m1860233s9232729',
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 2,
            'duration' => 60,
            'price' => 3000,
            'link' => 'https://b689665.yclients.com/company/651678/menu?o=m1860233s9216228'
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 3,
            'duration' => 60,
            'price' => 4000,
            'link' => 'https://b689665.yclients.com/company/651678/menu?o=m1860233s9232736',
        ]);
        DB::table('services_variations')->insert([
            'service_id' => 3,
            'duration' => 90,
            'price' => 5000,
            'link' => 'https://b689665.yclients.com/company/651678/menu?o=m1860233s9232743',
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 4,
            'duration' => 40,
            'price' => 3000,
            'link' => 'https://b689665.yclients.com/company/651678/menu?o=m1860233s9232747',
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 5,
            'duration' => 40,
            'price' => 3000,
            'link' => 'https://b689665.yclients.com/company/651678/menu?o=m1860233s9232749',
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 6,
            'duration' => 15,
            'price' => 1000,
            'link' => 'https://b689665.yclients.com/company/651678/menu?o=m1860233s9232755',
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 7,
            'duration' => 20,
            'price' => 1000,
            'link' => 'https://b689665.yclients.com/company/651678/menu?o=m1860233s9232761',
        ]);
    }
}

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
        ]);
        DB::table('services_variations')->insert([
            'service_id' => 1,
            'duration' => 90,
            'price' => 5000,
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 2,
            'duration' => 60,
            'price' => 3000,
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 3,
            'duration' => 60,
            'price' => 4000,
        ]);
        DB::table('services_variations')->insert([
            'service_id' => 3,
            'duration' => 90,
            'price' => 5000,
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 4,
            'duration' => 40,
            'price' => 3000,
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 5,
            'duration' => 40,
            'price' => 3000,
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 6,
            'duration' => 15,
            'price' => 1000,
        ]);

        DB::table('services_variations')->insert([
            'service_id' => 7,
            'duration' => 20,
            'price' => 1000,
        ]);
    }
}

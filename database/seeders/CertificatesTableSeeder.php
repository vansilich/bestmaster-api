<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CertificatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('certificates')->insert([
            'title' => 'Восстановительный массаж спины (1ч)',
            'price' => 4000,
            'photo' => 'certificate_1.png'
        ]);
        DB::table('certificates')->insert([
            'title' => 'Восстановительный массаж всего тела (1ч)',
            'price' => 5000,
            'photo' => 'certificate_2.png'
        ]);
        DB::table('certificates')->insert([
            'title' => 'Общий массаж всего тела (1,5ч)',
            'price' => 6000,
            'photo' => 'certificate_3.png'
        ]);
    }
}

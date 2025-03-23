<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('promotions')->insert([
            'title' => 'СКИДКА 15% НА ЛЮБОЙ КУРС ОТ 10 СЕАНСОВ',
        ]);
        DB::table('promotions')->insert([
            'title' => 'СКИДКА 10% НА ЛЮБОЙ КУРС ОТ 5 СЕАНСОВ',
        ]);
    }
}

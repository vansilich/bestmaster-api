<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'title' => 'Спортивный массаж тела*',
            'description' => 'Отлично походит для восстановления после тяжёлых физических нагрузках. Детально прорабатываются все группы мышц и увеличивается подвижность в суставах. Повышается тонус всего организма.',
            'video' => 'body_massage',
            'category_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => 'Лечебный массаж спины*',
            'description' => 'Эффективное устранение причин боли. Борьба с остеохондрозом, грыжей, мигренью, сколиозом и последствиями травм.',
            'video' => 'restorative_back_massage',
            'category_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => 'Восcтановительный массаж ног *',
            'description' => 'Детальная работа с мышцами и суставами. Устранение дискомфорта и ограничений при движениях.',
            'video' => 'restorative_legs_massage',
            'category_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => 'Скульптурирующий (slim) массаж тела',
            'description' => 'Проработка несовершенных участков тела и общая коррекция фигуры. Включает: лимфодренаж, работа с жировым слоем, повышение тонуса кожи.',
            'video' => 'body_sculpting_massage',
            'category_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => 'Абдоминальный массаж живота',
            'description' => 'Отличный выбор для восстановления после беременности и заболеваний органов живота',
            'video' => 'abdominal_massage',
            'category_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => 'Массаж лица',
            'description' => 'Омолаживание кожи лица. Хорошая альтернатива сывороткам и инъекциям',
            'video' => 'facial_massage',
            'category_id' => 1,
        ]);

        ///

        DB::table('services')->insert([
            'title' => 'Тейпирование (1 область)',
            'description' => 'Надёжная фиксация мышечно-связачного аппарата. Снжение боли. Для лучшего эффекта рекомендуем также посещение массажных процедур',
            'video' => 'taping',
            'category_id' => 2,
        ]);
        DB::table('services')->insert([
            'title' => 'Вакуумные банки',
            'description' => 'Улучшение кровообращения и микроциркуляции тканей.',
            'video' => 'vacuum_cans',
            'category_id' => 2,
        ]);

        DB::table('services')->insert([
            'title' => 'Массаж головы',
            'description' => 'Помогает убрать головные боли, нормализовать артериальное давление и улучшит самочувствие.',
            'video' => 'head_massage',
            'category_id' => 1,
        ]);
    }
}

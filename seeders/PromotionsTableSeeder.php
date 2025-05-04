<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PromotionsTableSeeder extends Seeder
{
    public function run()
    {
        $currentYear = Carbon::now()->year;
        $nextYear = $currentYear + 1;
        
        $promotions = [
            [
                'title' => 'Студенческая скидка',
                'description' => 'Специальная скидка 20% для студентов очной формы обучения',
                'discount_percent' => 20,
                'discount_amount' => null,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addMonths(3),
                'is_active' => true
            ],
            [
                'title' => 'Приведи друга',
                'description' => 'Получите 5000₽ скидки за каждого приведенного друга',
                'discount_percent' => null,
                'discount_amount' => 5000,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addYear(),
                'is_active' => true
            ],
            [
                'title' => 'Летний интенсив',
                'description' => 'Ускоренный курс за 3 недели со скидкой 15%',
                'discount_percent' => 15,
                'discount_amount' => null,
                'start_date' => Carbon::create($currentYear, 6, 1),
                'end_date' => Carbon::create($currentYear, 8, 31),
                'is_active' => true
            ],
            [
                'title' => 'Семейная скидка',
                'description' => '10% скидка для членов семьи текущих студентов',
                'discount_percent' => 10,
                'discount_amount' => null,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::create($nextYear, 12, 31), // Указываем конкретную дату вместо null
                'is_active' => true
            ],
            [
                'title' => 'Утренние группы',
                'description' => 'Скидка 7% на обучение в утренних группах (до 12:00)',
                'discount_percent' => 7,
                'discount_amount' => null,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addMonths(6),
                'is_active' => true
            ],
            [
                'title' => 'Полный курс +',
                'description' => 'Бесплатные 2 дополнительных занятия при оплате полного курса',
                'discount_percent' => null,
                'discount_amount' => null,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::now()->addMonths(2),
                'is_active' => true
            ],
            [
                'title' => 'Скидка за отзыв',
                'description' => 'Получите 2000₽ за честный отзыв о нашем обучении',
                'discount_percent' => null,
                'discount_amount' => 2000,
                'start_date' => Carbon::now(),
                'end_date' => Carbon::create($nextYear, 12, 31), // Указываем конкретную дату вместо null
                'is_active' => true
            ],
            [
                'title' => 'Новогодний спецпредложение',
                'description' => '25% скидка при записи в декабре на обучение в январе',
                'discount_percent' => 25,
                'discount_amount' => null,
                'start_date' => Carbon::create($currentYear, 12, 1),
                'end_date' => Carbon::create($currentYear, 12, 31),
                'is_active' => true
            ]
        ];

        foreach ($promotions as $promotion) {
            Promotion::create($promotion);
        }
    }
}
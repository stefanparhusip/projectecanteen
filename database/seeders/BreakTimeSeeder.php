<?php

namespace Database\Seeders;

use App\Models\BreakTime;
use Illuminate\Database\Seeder;

class BreakTimeSeeder extends Seeder
{
    public function run(): void
    {
        $breakTimes = [
            [
                'label' => 'Istirahat 1',
                'start_time' => '09:30:00',
                'end_time' => '10:00:00',
                // Deadline pre-order 15 menit sebelum istirahat mulai
                'order_deadline' => '09:15:00',
            ],
            [
                'label' => 'Istirahat 2',
                'start_time' => '12:00:00',
                'end_time' => '12:30:00',
                'order_deadline' => '11:45:00',
            ],
        ];

        foreach ($breakTimes as $bt) {
            BreakTime::create($bt);
        }
    }
}

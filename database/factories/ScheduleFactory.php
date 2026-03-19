<?php

namespace Database\Factories;

use App\Models\Schedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class ScheduleFactory extends Factory
{
    protected $model = Schedule::class;
    
    public function definition(): array
    {
        return [
            'event_title' => $this->faker->unique()->sentence(3),
            'description' => $this->faker->paragraph(),
            'schedule_date' => $this->faker->date(),
            'start_time' => $this->faker->time('H:i'),
            'end_time' => $this->faker->time('H:i'),
        ];
    }
}

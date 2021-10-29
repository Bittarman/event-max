<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use DateTimeImmutable;
use DateInterval;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $start = new DateTimeImmutable(rand(1,10) . ' days');
        $end = $start->add(new DateInterval('P' . rand(1,10) . 'D'));
        return [
            'name' => $this->faker->name(),
            'start_date' => $start,
            'end_date' => $end,
        ];
    }
}

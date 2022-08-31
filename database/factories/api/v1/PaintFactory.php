<?php

namespace Database\Factories\Api\V1;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaintFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'painter_id' => rand(1,9),
            'country_id' => rand(1,2),
            'user_id' => 1,
        ];
    }
}

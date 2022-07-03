<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' =>$this->fake->name(),
            'image' =>$this->faker->img(),                
            'description' =>$this->faker->paragraph(6),
            'price'=>$this->faker->numberBetween(100000,2000000),
            'oldprice'=>$this->faker->numberBetween(100000,2000000),
        ];
    }
}

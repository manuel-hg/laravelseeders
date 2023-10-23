<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class ProductFactory extends Factory
{

    public function definition()
    {
        $faker = Faker::create();
        return [
            'name' => $faker->name(),
            'short_description' => $faker->sentence(),
            'description' => $faker->paragraph(3),
            'price' => $faker->numberBetween(1,125),
        ];
    }
}

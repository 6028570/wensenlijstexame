<?php

namespace Database\Factories;

use App\Models\Wish;
use Illuminate\Database\Eloquent\Factories\Factory;

class WishFactory extends Factory
{
    protected $model = Wish::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 5, 100), // Genereert een prijs tussen 5 en 100
            'user_id' => \App\Models\User::factory(), // Maakt een nieuwe gebruiker aan als eigenaar
        ];
    }
}

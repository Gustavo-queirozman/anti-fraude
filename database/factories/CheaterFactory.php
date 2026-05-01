<?php

namespace Database\Factories;

use App\Models\Cheater;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Cheater>
 */
class CheaterFactory extends Factory
{
    protected $model = Cheater::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'cpf' => preg_replace('/[^0-9]/', '', fake()->numerify('###.###.###-##')),
            'zipcode' => preg_replace('/[^0-9]/', '', fake()->numerify('#####-###')),
        ];
    }
}

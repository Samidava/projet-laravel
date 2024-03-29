<?php

namespace Database\Factories;

use App\Models\Therapy;
use Illuminate\Database\Eloquent\Factories\Factory;

class TherapyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Therapy::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'sujet' => $this->faker->word,
            'tarif' => $this->faker->word,
            'statut' => $this->faker->word,
        ];
    }
}

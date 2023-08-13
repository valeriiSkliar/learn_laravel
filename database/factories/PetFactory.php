<?php

namespace Database\Factories;

use App\Models\Kind;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Pet::class;

    /**
     * @throws \Exception
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'image' => $this->faker->imageUrl(),
            'age' => random_int(2, 20),
            'color' => $this->faker->colorName(),
            'breed' => $this->faker->userName(),
            'birth_date' => $this->faker->date('Y-m-d', 'now'),
            'description' => $this->faker->text(150),
            'kind_id' => Kind::get()->random()->id,
            'is_neutered' => $this->faker->boolean(),
            'is_vaccinated' => $this->faker->boolean(),
        ];
    }
}

<?php

namespace Database\Factories;

use App\Models\Kind;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kind>
 */
class KindFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Kind::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->randomElement([
                'Домашние кошки',
                'Домашние собаки',
                'Грызуны',
                'Птицы',
                'Рептилии',
                'Аквариумные рыбки',
                'Другие',
            ])
        ];
    }
}

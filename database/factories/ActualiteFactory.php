<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Actualite>
 */
class ActualiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            
            'titre'=>$this->faker->sentence(),
            'contenu'=>$this->faker->text(),
            'lieu'=>$this->faker->address(),
            'date'=>$this->faker->dateTime(),
            'img_actualites'=>$this->faker->image(storage_path('app\public\destinations'), 1000, 567,'nature', false)
        ];
    }
}

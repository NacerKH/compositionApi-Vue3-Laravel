<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\track>
 */
class TrackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->title(),
            'description'=>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'image'=>$this->faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker'),
            'audio'=>$this->faker->text($maxNbChars = 50),
            'is_favourite'=>rand(0,1),
        ];
    }
}

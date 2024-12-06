<?php

namespace Database\Factories;

use App\Enums\Movie\MovieGenreEnum;
use App\Enums\Movie\MovieRatingEnum;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'release_at' => $this->faker->dateTime(),
            'languages' => 'English',
            'genre' => $this->faker->randomElement(MovieGenreEnum::class),
            'rating' => $this->faker->randomElement(MovieRatingEnum::class),
            'thumbnail_url' => $this->faker->imageUrl(),
            'status' => true
        ];
    }
}

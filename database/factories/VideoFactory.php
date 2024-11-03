<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Video>
 */
class VideoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $persian_faker = \Faker\Factory::create('fa_IR');

        return [
            'name' => $persian_faker->name(),
            'url' => "https://file-examples.com/wp-content/storage/2017/04/file_example_MP4_480_1_5MG.mp4",
            'thumbnail' => 'https://loremflickr.com/446/240/world?random=' . rand(1, 99),
            'length' => fake()->randomDigit(),
            'slug' => fake()->slug(3),
            'description' => $persian_faker->realText()
        ];
    }
}

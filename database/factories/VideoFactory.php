<?php

namespace Database\Factories;

use App\Models\Category;
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
            'description' => 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته،',
            'category_id' => Category::all()->random(1)->first()->id
        ];
    }
}

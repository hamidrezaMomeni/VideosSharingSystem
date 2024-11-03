<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'ورزشی' => [
                'slug' => 'sport',
                'icon' => 'fa fa-futbol-o'
            ],
            'بازی' => [
                'slug' => 'game',
                'icon' => 'fa fa-gamepad'
            ],
            'تاریخی' => [
                'slug' => 'historical',
                'icon' => 'fa fa-university'
            ],
            'طنز' => [
                'slug' => 'fun',
                'icon' => 'fa fa-smile'
            ],
            'سینما' => [
                'slug' => 'cinema',
                'icon' => 'fa fa-film'
            ],
            'وحشت' => [
                'slug' => 'horror',
                'icon' => 'fa fa-hashtag'
            ]
            ,'تکنولوژی' => [
                'slug' => 'tech',
                'icon' => 'fa fa-laptop'
            ],
        ];

        foreach ($categories as $category_name => $category_details)
        {
            Category::create([
                'name' => $category_name,
                'slug' => $category_details['slug'],
                'icon' => $category_details['icon']
            ]);
        }
    }
}

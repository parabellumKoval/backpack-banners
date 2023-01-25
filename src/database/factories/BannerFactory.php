<?php

namespace Backpack\Banners\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Backpack\Banners\app\Models\Banner;

class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banner::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
      return [
        'name' => 'Banner ' . $this->faker->randomNumber(2, false),
        'slug' => $this->faker->slug(),
        'items' => [
          config('app.locale', 'en') => [
            [
              'src' => $this->faker->imageUrl(1280, 740, 'banner', true),
              'alt' => $this->faker->words(3, true),
              'title' => $this->faker->words(3, true),
              'caption' => $this->faker->words(3, true),
              'excerpt' => $this->faker->sentence(),
              'content' => $this->faker->paragraph(2),
              'link' => $this->faker->url(),
              'link_text' => $this->faker->words(1, true)
            ],[
              'src' => $this->faker->imageUrl(1280, 740, 'banner', true),
              'alt' => $this->faker->words(3, true),
              'title' => $this->faker->words(3, true),
              'caption' => $this->faker->words(3, true),
              'excerpt' => $this->faker->sentence(),
              'content' => $this->faker->paragraph(2),
              'link' => $this->faker->url(),
              'link_text' => $this->faker->words(1, true)
            ],[
              'src' => $this->faker->imageUrl(1280, 740, 'banner', true),
              'alt' => $this->faker->words(3, true),
              'title' => $this->faker->words(3, true),
              'caption' => $this->faker->words(3, true),
              'excerpt' => $this->faker->sentence(),
              'content' => $this->faker->paragraph(2),
              'link' => $this->faker->url(),
              'link_text' => $this->faker->words(1, true)
            ]
          ]
        ],
        'is_active' => $this->faker->randomElement([1,0]),
      ];
    }

}

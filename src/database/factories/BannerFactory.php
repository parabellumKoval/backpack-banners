<?php

namespace Backpack\Reviews\database\factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Backpack\Reviews\app\Models\Review;

class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Review::class;

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
          [
            'image' => $this->faker->imageUrl(1280, 740, 'banner', true),
            'title' => $this->faker->words(3, true),
            'excerpt' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(2),
            'link' => $this->faker->url()
          ],[
            'image' => $this->faker->imageUrl(1280, 740, 'banner', true),
            'title' => $this->faker->words(3, true),
            'excerpt' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(2),
            'link' => $this->faker->url()
          ],[
            'image' => $this->faker->imageUrl(1280, 740, 'banner', true),
            'title' => $this->faker->words(3, true),
            'excerpt' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(2),
            'link' => $this->faker->url()
          ]
        ],
        'is_active' => $this->faker->randomElement([1,0]),
      ];
    }

}

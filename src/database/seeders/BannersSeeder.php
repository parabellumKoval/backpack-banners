<?php

namespace Backpack\Banners\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;

use Backpack\Banners\app\Models\Banner;

class BannersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      Banner::factory()
          ->count(3)
          ->create();
    }
}

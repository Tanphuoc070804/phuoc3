<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Product;
use Faker\Factory as Faker;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->word,
                'img' => $faker->imageUrl(200, 200),
                'description' => $faker->sentence,
                'price' => $faker->numberBetween(1000, 100000),
                'quantity' => $faker->numberBetween(1, 100),
                'sold' => $faker->numberBetween(1, 100),
                'category_id' => $faker->numberBetween(1, 10)
            ]);
        }

    }
}

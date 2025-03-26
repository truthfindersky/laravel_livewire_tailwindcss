<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 50; $i++) {
            Product::create([
                'name' => $faker->word(),
                'description' => $faker->sentence(),
               'price' => $faker->numberBetween(10, 500),
            ]);
        }
    }
}

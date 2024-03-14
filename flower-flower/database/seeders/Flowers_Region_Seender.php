<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Flower;
use App\Models\Region;

class Flowers_Region_Seender extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Tạo dữ liệu giả cho bảng "flowers" và "regions"
        for ($i = 0; $i < 10; $i++) {
            $flower = Flower::create([
                'name' => $faker->name,
                'description' => $faker->sentence,
                'image_url' => $faker->imageUrl(),
            ]);

            Region::create([
                'flower_id' => $flower->id,
                'region_name' => $faker->city,
            ]);
        }
    }
}
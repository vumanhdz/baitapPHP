<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArtistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $enumValues = ['hội họa','âm nhạc','văn học'];
        for ($i = 0; $i < 10; $i++) {
            DB::table("artworks")->insert([
                "id" => $faker->unique()->numberBetween(1, 100),
                "artist_name" => $faker->word,
                "description" => $faker->sentence,
                "art_type" => $faker->randomElement($enumValues),
                "media_link" => $faker->word,
                "cover_image" => $faker->word,
            ]);
        }
    }
}

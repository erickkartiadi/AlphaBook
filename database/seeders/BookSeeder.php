<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['crime', 'dictionary', 'hobbies', 'business', 'classic', 'mystery', 'fantasy', 'action and adventure', 'horror', 'romance', 'sci-fi', 'biographies and autobiographies', 'history', 'self-help'];

        $faker = Faker::create();
        for ($i = 0; $i < 40; $i++) {
            DB::table('books')->insert([
                'title' => $faker->word(rand(1, 3)),
                'genre' => $faker->randomElement($genres),
                'author' => $faker->name(),
                'total_pages' => $faker->numberBetween(100, 3000),
                'published_year' => $faker->numberBetween(2000, 2021),
                'image_url' => "https://picsum.photos/id/" . rand(1, 1000) . "/200/300",
            ]);
        }
    }
}

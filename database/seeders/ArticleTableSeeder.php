<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('articles')->insert([
                'user_id' => 1,
                'category_id' => 1,
                'title' => $faker->sentence,
                'slug' => Str::slug($faker->sentence),
                'description' => $faker->paragraph,
                'cover_image' => $faker->optional()->imageUrl(640, 480, 'business', true, 'Faker'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
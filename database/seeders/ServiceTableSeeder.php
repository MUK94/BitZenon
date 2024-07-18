<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index) {
            DB::table('services')->insert([
                'user_id' => 1,
                'title' => $faker->sentence,
                'slug' => Str::slug($faker->sentence),
                'description' => $faker->paragraph,
                'author_bio' => $faker->paragraph,
                'price' => $faker->numberBetween(100, 10000),
                'address' => $faker->address,
                'phone_number' => $faker->phoneNumber,
                'cover_image' => $faker->optional()->imageUrl(640, 480, 'business', true, 'Faker'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
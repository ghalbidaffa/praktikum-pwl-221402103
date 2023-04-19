<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [];
        $faker = Factory::create();
        $i;

        for($i = 1; $i <= 5; $i++){
            $posts [] = [
                'title'     => $faker->sentence($nbWords = 4, $variableNbWords = true),
                'excerpt'   => $faker->sentence($nbWords = 12, $variableNbWords = true),
                'content'   => $faker->text,
                'image'     => $faker->imageUrl($width = 480, $height = 480),
                'author_id' => $faker->numberBetween(1,10)
            ];

        }
        DB::table("posts")->insert($posts);
    }
}

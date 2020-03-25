<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newPost = new Post;
            $newPost->description = $faker->sentence($nbWords = 20, $variableNbWords = true);
            $newPost->img = $faker->imageUrl($width = 640, $height = 480);
            $newPost->author = $faker->name;
            $newPost->author_img = $faker->imageUrl($width = 640, $height = 480);
            $newPost->save();
        };
    }
}

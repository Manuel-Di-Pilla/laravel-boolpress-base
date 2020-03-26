<?php

use Illuminate\Database\Seeder;

use App\Photo;

use Faker\Generator as Faker;

class PhotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $newPhoto = new Photo;
            $newPhoto->url = 'https://www.artesliberalesvercelli.it/wp-content/uploads/2010/01/pasaggio.jpg';
            $newPhoto->user_id = rand(1,4);
            $newPhoto->save();
        }
    }
}

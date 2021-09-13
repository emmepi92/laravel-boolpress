<?php

use Illuminate\Database\Seeder;
use App\Post;
use Faker\Generator as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0;$i <50; $i++) {
            $post= new Post();
            $post->text_content = $faker->paragraph(5);
            $post->author = $faker->words(2,true);
            $post->img_path = $faker->imageUrl(600, 300, 'animals', true);
            $post->save();
        }
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Category;
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
        // lista delle categorie
        $categoryList = [
            'cronaca',
            'sport',
            'opinione',
            'turismo',
            'musica',
            'cinema'
        ];

        // inizializzo array vuoto da riempire con solo gli id delle singole categorie
        $categoryListID =[];

        // ciclo sull'array delle categorie, creo i miei Seeders Category + mi salvo i loro id
        foreach($categoryList as $category) {
            $categoryObj = new Category();          //creo un nuovo oggetto Category
            $categoryObj->name = $category;         //alla prorpietà nome uso quelli salvati nel mio array
            $categoryObj->save();                   //salvo il nuovo oggetto
            $categoryListID[] = $categoryObj->id;   //salvo nell'array il suo id
        }

        for ($i=0;$i <50; $i++) {
            $post= new Post();
            $post->title = $faker->words(3,true);
            $post->text_content = $faker->paragraph(15);
            $post->author = $faker->words(2,true);
            $post->img_path = $faker->imageUrl(600, 300, 'blog', true);

            $randCategoryKey = array_rand($categoryListID,1);
            $categoryID = $categoryListID[$randCategoryKey];
            $post->category_id = $categoryID;

            $post->save();
        }
    }
}

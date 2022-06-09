<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
     
        for ($i=0; $i < 20 ; $i++) { 
            $new_post = New Post();
            $new_post->title = $faker->words(2, true);
            $new_post->content = $faker->paragraph(5);
            $new_post->image = $faker->imageUrl(640, 480, 'animals', true ,'dogs');
            $new_post->slug = Str::of($new_post->title)->slug('-');
            $new_post->save();
        }
    }
}

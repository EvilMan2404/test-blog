<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tags;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tags::factory(20)->create()->pluck('id')->toArray();

        $posts = Post::factory(20)->make()->each(static function ($post) use ($tags) {
            $post->save();
            $post->tags()->sync($tags); //присвоили все теги каждоый статье
        });
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;

class SeedPostTagTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = Post::all();
        $tags = Tag::all();

        // $post->tags()->attach($tag->id);
        foreach ($posts as $post) {
            foreach ($tags as $tag) {
                $post->tags()->attach($tag->id);
            }
        }
    }

    public function down()
    {
        // You can leave this method empty if you don't need to undo the seeding
    }
}

<?php

namespace Database\Seeders;

use \App\Models\Tag;
use App\Models\User;
use \App\Models\Post;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        
        // Post::factory(6)->create();
        $this->call(PostSeeder::class);
    }
}

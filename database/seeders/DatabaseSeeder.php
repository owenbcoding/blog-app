<?php

namespace Database\Seeders;

use \App\Models\Tag;
use App\Models\User;
use \App\Models\Post;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Database\Seeders\AdminSeeder;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = user::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'is_admin' => true,
        ]);

        Post::factory(3)->create(['user_id' => $user->id]);

        $this->call(PostSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(SeedPostTagTable::class);
    }
}

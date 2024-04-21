<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Mozz\Support\Models\Post;
use Mozz\Support\Models\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//            'password' => bcrypt('12345'),
//        ]);
//        Post::factory()->count(10)->create();
        Tag::factory()->count(10)->create();
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Kind;
use App\Models\Pet;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Kind::factory(8)->create();
        Category::factory(8)->create();
        $tags = Tag::factory(30)->create();
        $posts = Post::factory(200)->create();
        $pets = Pet::factory(100)->create();

        foreach ($posts as $post) {
            $tagsId = $tags->random(5)->pluck('id');
            $post->tags()->attach($tagsId);
        }
    }
}

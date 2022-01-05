<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostComment;
use App\Models\User;
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
        User::factory()
          ->has(
            Post::factory()
              ->hasLikes(rand(5, 10))
              ->has(
                PostComment::factory()
                  ->hasLikes(rand(5, 10))
                  ->count(rand(5, 10))
                , 'comments'
              )
              ->count(rand(5, 10))
          )
          ->count(10)
          ->create();
    }
}

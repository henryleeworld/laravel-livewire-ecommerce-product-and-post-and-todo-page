<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Post::factory()
            ->hasComments(3000)
            ->create();

        Post::factory()->count(20)->create();
    }
}

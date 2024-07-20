<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Todo::factory()->count(5)->create();
    }
}

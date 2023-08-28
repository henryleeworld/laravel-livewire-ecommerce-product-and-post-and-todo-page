<?php

namespace Tests\Feature;

use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    use RefreshDatabase;

    public function test_post_is_created()
    {
        Livewire::test(CreatePost::class)
            ->set('form.title', 'Secret Title')
            ->set('form.body', 'Secret Body')
            ->call('save')
            ->assertSet('success', true);

        $this->assertDatabaseHas('posts', ['title' => 'Secret Title', 'body' => 'Secret Body']);
    }
}

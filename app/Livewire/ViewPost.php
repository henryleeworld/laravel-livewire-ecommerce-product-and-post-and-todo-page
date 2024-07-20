<?php

namespace App\Livewire;

use App\Models\Post;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Attributes\On;
use Livewire\Component;

class ViewPost extends Component
{
    public Post $post;

    public int $commentsCount = 0;

    public function mount(Post $post): void
    {
        $this->post = $post;
        $this->post->loadCount('comments');
        $this->commentsCount = $this->post->comments_count;
    }

    #[On('comment-added')]
    public function commentAdded(): void
    {
        $this->commentsCount++;
    }

    #[Layout('layouts.app')]
    public function render(): View
    {
        return view('livewire.view-post');
    }
}

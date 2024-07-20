<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class TodoInfo extends Component
{
    #[Reactive]
    public Todo $todo;

    public function render(): View
    {
        return view('livewire.todo-info');
    }
}

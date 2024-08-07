<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Component;

class TodosList extends Component
{
    public Collection $todos;
    public ?Todo $selected;

    public function mount(): void
    {
        $this->todos = Todo::all();

        $this->selected = $this->todos->first();
    }

    public function deselect(): void
    {
        $this->selected = null;
    }

    public function select(Todo $todo): void
    {
        $this->selected = $todo;
    }

    public function render(): View
    {
        return view('livewire.todos-list');
    }
}

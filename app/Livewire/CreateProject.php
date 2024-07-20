<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateProject extends Component
{
    public function mount(): void
    {

    }

    public function render(): View
    {
        return view('livewire.create-project');
    }
}

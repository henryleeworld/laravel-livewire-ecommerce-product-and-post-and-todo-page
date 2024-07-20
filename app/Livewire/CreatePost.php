<?php

namespace App\Livewire;

use App\Livewire\Forms\PostForm;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Str;
use Livewire\Component;

class CreatePost extends Component
{
    public PostForm $form;

    public bool $success = false;

    public function save(): void
    {
        $this->validate();

        $this->form->save();

        $this->success = true;

//        $this->reset('form.title');
    }

    /*public function updatedFormTitle(): void
    {
        $this->form->title = Str::headline($this->form->title);
    }*/

    public function updated($property): void
    {
        if ($property == 'form.title') {
            $this->form->title = Str::headline($this->form->title);
        }
    }

    public function validateTitle(): void
    {
        $this->validateOnly('form.title');
    }

    public function render(): View
    {
        return view('livewire.create-post');
    }
}

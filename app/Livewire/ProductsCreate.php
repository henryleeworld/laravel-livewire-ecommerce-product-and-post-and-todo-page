<?php

namespace App\Livewire;

use App\Livewire\Forms\ProductsForm;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductsCreate extends Component
{
    use WithFileUploads;

    public ProductsForm $form;
//    #[Rule('required|min:3')]
//    public string $name = '';
//    #[Rule('required|min:3')]
//    public string $description = '';
//    #[Rule('required|exists:categories,id', as: 'category')]
//    public int $category_id;
    public Collection $categories;

    public function mount(): void
    {
        $this->categories = Category::pluck('name', 'id');
    }

    public function save(): void
    {
        $this->form->save();
        $this->redirect('/products');
    }

    public function render(): View
    {
        return view('livewire.products-create');
    }
}

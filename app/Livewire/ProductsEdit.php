<?php

namespace App\Livewire;

use App\Livewire\Forms\ProductsForm;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Attributes\Locked;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProductsEdit extends Component
{
    use WithFileUploads;

    public ProductsForm $form;
//    #[Locked]
//    public int $productId;
//    #[Rule('required|min:3')]
//    public string $name = '';
//    #[Rule('required|min:3')]
//    public string $description = '';
//    #[Rule('required|exists:categories,id', as: 'category')]
//    public int $category_id;
    public Collection $categories;

    public function mount(Product $product): void
    {
        $this->form->setProduct($product);
        $this->categories = Category::pluck('name', 'id');
    }

    public function save(): void
    {
//        $this->validate();
//
//        Product::where('id', $this->productId)->update($this->only(['name', 'description', 'category_id'])); // [tl! highlight]
        $this->form->update();

        $this->redirect('/products');
    }

    public function render(): View
    {
//        return view('livewire.products-edit');
        return view('livewire.products-create');
    }
}

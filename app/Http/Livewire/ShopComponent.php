<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategory;

class ShopComponent extends Component
{
    public function render()
    {
        return view('livewire.shop-component',[
            'categories' => Category::get(),
            'products' => Product::paginate(12),
        ])->layout('layouts.base');
    }
}

<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategory;

class AdminProductPageComponent extends Component
{

    public $title;
    public $description;
    public $price;
    public $image;
    public $productcategories = [];
    public $productId;

    public $showProductModal = false;

    use WithFileUploads;

    public function render()
    {
        return view('livewire.admin.admin-product-page-component',[
            'categories' => Category::get(),
            'products' => Product::get(),
        ])->layout('layouts.admin');
    }

    public function createProduct()
    {

        $this->validate([
            'image' => 'image|max:10240'//10 MB Max
        ]);

        $created = Product::create([
            'title' => $this->title,
            'description' => $this->description,
            'price' => $this->price,
            'image' => $this->image->store("images","public")
        ]);
        $created->categories()->attach($this->productcategories);
        return redirect()->route('admin.product');
        
    }

    public function deleteProduct($productId)
    {
        $product = Product::find($productId);
        $file = public_path('/storage/').$product->image;
        if(file_exists($file)){
            @unlink($file);
        }
        $product->delete();
        $productcategory = ProductCategory::where('product_id',$productId)->delete();
    }
    
    
}

<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;

class AdminCategoryPageComponent extends Component
{

    public $name;

    public function render()
    {
        return view('livewire.admin.admin-category-page-component',[
            'categories' => Category::get()
        ])->layout('layouts.admin');
    }

    public function createCategory()
    {
        $status = Category::where('name', '=', $this->name)->first();
        if($status === null){
            Category::create([
                'name' => $this->name
            ]);
            return redirect()->route('admin.category');
        }
        else{
            return redirect()->route('admin.category')->with('error','Category exists');
        }
        
    }

    public function deleteCategory($categoryId)
    {
        $category = Category::find($categoryId);
        $category->delete();
    }


}

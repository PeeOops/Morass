<?php

namespace App\Http\Livewire\Admin;

use App\Models\Highlight;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdminHighlightComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $description;
    public $image;


    public function render()
    {
        return view('livewire.admin.admin-highlight-component',[
            'highlights' => Highlight::latest()->get()
        ])->layout('layouts.admin');
    }

    public function createHighlight()
    {



        $this->validate([
            'image' => 'image|max:5120', //5Mb Max
        ]);
        
        Highlight::create([
    
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image->store('images','public')
        ]);

        return redirect()->route('admin.highlight');
    }

    public function deleteHighlight($id){

        $highlight = Highlight::find($id);

        $file = public_path('/storage/').$highlight->image;
        if(file_exists($file)){
            @unlink($file);
        }

        $highlight->delete();
    }
    
}

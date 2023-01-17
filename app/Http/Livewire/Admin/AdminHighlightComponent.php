<?php

namespace App\Http\Livewire\Admin;

use App\Models\Highlight;
use Livewire\Component;
use Livewire\WithFileUploads;
use DB;

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
        $count = DB::table('highlights')->count();


        $this->validate([
            'image' => 'image|max:5120' //5Mb Max
        ]);
        
        if($count === 0){
            Highlight::create([
        
                'title' => $this->title,
                'description' => $this->description,
                'image' => $this->image->store('images','public')
            ]);

            return redirect()->route('admin.highlight')->with('highlightMessages','Data added');

        }else{

            return redirect()->route('admin.highlight')->with('highlightMessages','Please delete the data before adding another one');
        }


    }

    public function deleteHighlight($id){

        $highlight = Highlight::find($id);

        $file = public_path('/storage/').$highlight->image;
        if(file_exists($file)){
            @unlink($file);
        }

        $highlight->delete();

        return redirect()->route('admin.highlight')->with('highlightMessages','Data deleted');
    }

    public function cancelForm(){
        return redirect()->route('admin.highlight');
    }
    
}

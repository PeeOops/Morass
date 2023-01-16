<?php

namespace App\Http\Livewire\Admin;

use App\Models\Featured;
use Livewire\Component;
use Livewire\WithFileUploads;
use DB;

class AdminFeaturedComponent extends Component
{


    use WithFileUploads;

    public $title;
    public $description;
    public $image;
    public $game_title;
    public $price;

    public $updateFeaturedId = 0;

    public function render()
    {
        return view('livewire.admin.admin-featured-component',[
            'featureds' => Featured::latest()->get()
        ])->layout('layouts.admin');
    }

    public function createFeatured()
    {
        $count = DB::table('featureds')->count();

        $this->validate([
            'image' => 'image|max:5120' //5Mb Max
        ]);

        if($count === 0 || $count === 1 || $count === 2){
            Featured::create([
                'title' => $this->title,
                'description' => $this->description,
                'image' => $this->image->store('images','public'),
                'game_title' => $this->game_title,
                'price' => $this->price
            ]);



            return redirect()->route('admin.featured')->with('featuredMessages','Data added');
        }else{
            return redirect()->route('admin.featured')->with('featuredMessages','Please delete the data before adding another one');
        }
    }

    public function deleteFeatured($id){

        $featured = Featured::find($id);

        $file = public_path('/storage/').$featured->image;
        if(file_exists($file)){
            @unlink($file);
        }

        $featured->delete();

        return redirect()->route('admin.featured')->with('featuredMessages','Data deleted');
    }

    public function updateFeatured($id){
        $featured = Featured::find($id);

        $this->updateFeaturedId = $id;

        $file = public_path('/storage/').$featured->image;

        $this->title = $featured->title;
        $this->description = $featured->description;
        $this->image = $file;
        $this->game_title = $featured->game_title;
        $this->price = $featured->price;
    }

    public function updateForm($id){
        $featured = Featured::find($id);

        $file = public_path('/storage/').$featured->image;

        $featured->title = $this->title ;
        $featured->description = $this->description ;
        if(file_exists($file)){
            @unlink($file);
            $featured->image = $this->image->store('images','public');
        }else{
            $featured->image = $this->image->store('images','public');
        }
        $featured->game_title = $this->game_title ;
        $featured->price = $this->price ;

        $featured->save();


        $this->updateFeaturedId = 0;

    }

    public function cancelForm(){
        return redirect()->route('admin.featured');
    }
}

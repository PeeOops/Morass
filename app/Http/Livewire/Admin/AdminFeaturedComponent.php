<?php

namespace App\Http\Livewire\Admin;

use App\Models\Featured;
use App\Models\Featuredgames;
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
    public $updateFeaturedGamesId = 0;

    public function render()
    {
        return view('livewire.admin.admin-featured-component',
        [
            'featureds' => Featured::latest()->get(),
            'featuredgames' => Featuredgames::latest()->get()
        ]

        )->layout('layouts.admin');
    }

    public function createFeatured()
    {
        $count = DB::table('featureds')->count();

        if($count === 0){
            Featured::create([
                'title' => $this->title,
                'description' => $this->description
            ]);



            return redirect()->route('admin.featured')->with('featuredMessages','Data added');
        }else{
            return redirect()->route('admin.featured')->with('featuredMessages','Please delete the data before adding another one');
        }
    }

    public function createFeaturedGames()
    {
        $count = DB::table('featuredgames')->count();
        
        $this->validate([
            'image' => 'image|max:5120' //5Mb Max
        ]);

        if($count === 0 || $count === 1 || $count === 2)
        {
            Featuredgames::create([
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

        $featured->delete();

        return redirect()->route('admin.featured')->with('featuredMessages','Data deleted');
    }

    public function deleteFeaturedGames($id)
    {
        $featuredgame = Featuredgames::find($id);

        $file = public_path('/storage/').$featuredgame->image;
        if(file_exists($file)){
            @unlink($file);
        }

        $featuredgame->delete();

        return redirect()->route('admin.featured')->with('featuredMessages','Data deleted');
    }

    public function updateFeatured($id){
        $featured = Featured::find($id);

        $this->updateFeaturedId = $id;

        $this->title = $featured->title;
        $this->description = $featured->description;

    }

    public function updateFeaturedGames($id)
    {
        $featuredgame = Featuredgames::find($id);

        $this->updateFeaturedGamesId = $id;

        $file = public_path('/storage/').$featuredgame->image;

        $this->image = $file;
        $this->game_title = $featuredgame->game_title;
        $this->price = $featuredgame->price;
    }

    public function updateForm($id){
        $featured = Featured::find($id);

        $featured->title = $this->title ;
        $featured->description = $this->description ;


        $featured->save();


        $this->updateFeaturedId = 0;

    }

    public function updateGameForm($id)
    {
        $featuredgame = Featuredgames::find($id);

        $file = public_path('/storage/').$featuredgame->image;

        if(file_exists($file)){
            @unlink($file);
            $featuredgame->image = $this->image->store('images','public');
        }else{
            $featuredgame->image = $this->image->store('images','public');
        }
        $featuredgame->game_title = $this->game_title ;
        $featuredgame->price = $this->price ;

        $featuredgame->save();

        $this->updateFeaturedGamesId = 0;
    }

    public function cancelForm(){
        return redirect()->route('admin.featured');
    }
}

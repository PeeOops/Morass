<?php

namespace App\Http\Livewire;

use App\Models\Featured;
use App\Models\Featuredgames;
use App\Models\Highlight;
use Livewire\Component;

class HomeComponent extends Component
{

    public $title;
    public $description;
    public $image;
    public $game_title;
    public $price;

    public $updateFeaturedId = 0;
    public $updateFeaturedGamesId = 0;

    public function render()
    {
        return view('livewire.home-component',
        [
            'highlights' => Highlight::latest()->get(),
            'featuredgames' => Featuredgames::latest()->get(),
            'featureds' => Featured::latest()->get()
        ]
        )->layout('layouts.base');
    }
}

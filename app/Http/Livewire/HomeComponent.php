<?php

namespace App\Http\Livewire;

use App\Models\Highlight;
use Livewire\Component;

class HomeComponent extends Component
{

    public $title;
    public $description;
    public $image;

    public function render()
    {
        return view('livewire.home-component',[
            'highlights' => Highlight::latest()->get()
        ])->layout('layouts.base');
    }
}

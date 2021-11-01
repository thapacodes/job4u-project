<?php

namespace App\Http\Livewire;

use Livewire\Component;

class HeroSection extends Component
{
    public $heading;
    public $paragraph;

    public function render()
    {
        return view('livewire.hero-section');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BreadCrumbSecondLevel extends Component
{
    public $link_1;
    public function render()
    {
        return view('livewire.bread-crumb-second-level');
    }
}

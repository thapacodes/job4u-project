<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BreadCrumbDashboardThirdLevel extends Component
{
    public $link_1;
    public $link_1_url;
    public $link_2;
    public function render()
    {
        return view('livewire.bread-crumb-dashboard-third-level');
    }
}

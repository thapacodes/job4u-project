<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FAQ;

class Job4uFaq extends Component
{
    public function render()
    {
        return view('livewire.job4u-faq', [
            'pageArray' => FAQ::paginate(16)
        ]);
    }
}

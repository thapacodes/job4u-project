<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobListing extends Component
{
    public function render()
    {
        return view('livewire.job-listing', [
            'pageArray' => Job::paginate(20)
        ]);
    }
}

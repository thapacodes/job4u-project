<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;

class JobCategoriesHome extends Component
{
    public $category;

    public function render()
    {
        $category = '%'.$this->category.'%';
        return view('livewire.job-categories-home', [
            'pageArray' => Job::where('category', 'like', $category)
            ->paginate(10),
        ]);
    }
}

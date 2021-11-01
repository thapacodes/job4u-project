<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Job;

class AdvanceSearch extends Component
{
    public $search;
    public $type;
    public $category;
    public $work_region;
    public $fully_remote;
    public $posted_at;
    public $education_level;
    public $experience_level;
    public $salary;
    
    protected $queryString = [
        'search' => ['except'=>''],
        'type' => ['except'=>''],
        'category' => ['except' => ''],
        'work_region' => ['except' => ''],
        'fully_remote' => ['except' => ''],
        'posted_at' => ['except' => ''],
        'education_level' => ['except' => ''],
        'experience_level' => ['except' => ''],
        'salary' => ['except' => ''],
    ];

    use WithPagination;

    public function updatedSearch() {
        $this->resetPage();
    }

    public function updatedType() {
        $this->resetPage();
    }

    public function updatedCategory() {
        $this->resetPage();
    }

    public function updatedWorkRegion() {
        $this->resetPage();
    }

    public function updatedFullyRemote() {
        $this->resetPage();
    }
    public function updatedPostedAt() {
        $this->resetPage();
    }
    public function updatedEducationLevel() {
        $this->resetPage();
    }
    public function updatedExperienceLevel() {
        $this->resetPage();
    }
    public function updatedSalary() {
        $this->resetPage();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        $category = '%'.$this->category.'%';
        $type = '%'.$this->type.'%';
        $region = '%'.$this->work_region.'%';
        $fully_remote = '%'.$this->fully_remote.'%';
        $experience_level = '%'.$this->experience_level.'%';
        $education_level = '%'.$this->education_level.'%';
        $date = \Carbon\Carbon::today()->subDays($this->posted_at);
        
        return view('livewire.advance-search', [
            'pageArray' => Job::where('category', 'like', $category)
            ->where('fully_remote','like', $fully_remote)
            ->where('work_region', 'like', $region)
            ->where('title','like', $search)
            ->where('type','like', $type)
            ->where('education', 'like', $education_level)
            ->where('experience', 'like', $experience_level)
            ->where('salary', '>=', (int)$this->salary)
            ->where('created_at', '>=', $date)
            ->paginate(20),
        ]);
    }
}

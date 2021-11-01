<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ApplyForJob;

class ApplyForJobs extends Component
{
    public $title;
    public $userid;
    public $jobid;

    public function apply() {
        if (ApplyForJob::where('job_id', $this->jobid)->where('applied_by_id', $this->userid)->exists()) {
            session()->flash('message', 'Job already applied.');
            $this->mount();
            $this->render();
        }
        else {
            ApplyForJob::create([
                'job_id' => $this->jobid,
                'applied_by_id' => $this->userid
            ]);
            session()->flash('message', 'Job successfully applied.');
            $this->mount();
            $this->render();
        }
    }

    public function render()
    {
        return view('livewire.apply-for-jobs');
    }
}

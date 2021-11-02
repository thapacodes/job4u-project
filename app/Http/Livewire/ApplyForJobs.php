<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\ApplyForJob;

class ApplyForJobs extends Component
{
    public $title;
    public $userid;
    public $name;
    public $email;
    public $resume;
    public $about;
    public $avater;
    public $education;
    public $skill;
    public $contact;
    public $address;
    public $jobid;
    public $useremail;

    public function apply() {
        if (ApplyForJob::where('job_id', $this->jobid)->where('email', $this->email)->exists()) {
            session()->flash('message', 'Job already applied.');
            $this->mount();
            $this->render();
        }
        else {
            ApplyForJob::create([
                'job_id' => $this->jobid,
                'name' => $this->name,
                'email' => $this->email,
                'avater' => $this->avater,
                'resume' => $this->resume,
                'about' => $this->about,
                'education' => $this->education,
                'skill' => $this->skill,
                'contact' => $this->contact,
                'address' => $this->address,
                'status' => null,
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

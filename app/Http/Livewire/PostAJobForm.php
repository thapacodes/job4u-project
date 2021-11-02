<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use App\Models\Job;
use App\Models\Company;

class PostAJobForm extends Component
{
    public $title;
    public $category;
    public $type;
    public $salary;
    public $fully_remote;
    public $experience_level;
    public $education_level;
    public $work_region;
    public $form_url;
    public $job_description;

    public $email;
    public $user_id;


    protected $rules = [
        'title' => 'required|string|min:4|max:160',
        'category' => 'required|string|min:4|max:255',
        'type' => 'required|string|min:4|max:255',
        'fully_remote' => 'required|string|max:255',
        'work_region' => 'nullable|string|max:255',
        'experience_level' => 'required|min:3|string|max:255',
        'education_level' => 'required|min:3|string|max:255',
        'salary' => 'nullable|max:255',
        'job_description' => 'required|string|min:4|max:4294967000',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validatedData = $this->validate();

        $companyDetails = Company::where('uploaded_by', $this->user_id)->first();

        if($companyDetails->status != 'aprove') {
            session()->flash('page-message', 'Your Company has not been verified yet.');
        }
        else {
            Job::create([
                'title' => $this->title,
                'slug' => preg_replace('/\s+/', '-', $this->title.'-'.Str::random(10)),
                'category' => $this->category,
                'type' => $this->type,
                'fully_remote' => $this->fully_remote,
                'salary' => $this->salary,
                'work_region' => $this->work_region,
                'experience' => $this->experience_level,
                'education' => $this->education_level,
                'description' => $this->job_description,
                'uploaded_by' => $this->user_email,
                'status' => true,
            ]);
    
            session()->flash('page-message', 'Job successfully posted.');
        }
    }

    public function render()
    {
        return view('livewire.post-a-job-form');
    }
}

<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NewsLetters;

class NewsLetter extends Component
{
    public $name;
    public $email;
    public $address;
    public $employer;
    public $job_seeker;

    protected $rules = [
        'name' => 'required|string|min:4|max:160',
        'email' => 'required|email|unique:news_letters,email|min:4|max:255',
        'address' => 'required|string|min:4|max:255',
        'employer' => 'nullable|max:255',
        'job_seeker' => 'nullable|max:255',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save() {
        $validatedData = $this->validate();
        NewsLetters::create([
            'name' => $this->name,
            'email' => $this->email,
            'address' => $this->address,
            'employer' => $this->employer,
            'job_seeker' => $this->job_seeker,
            'status' => true,
        ]);
        session()->flash('page-message', 'You are successfully signed to our Newsletter.');
    }

    public function render()
    {
        return view('livewire.news-letter');
    }
}

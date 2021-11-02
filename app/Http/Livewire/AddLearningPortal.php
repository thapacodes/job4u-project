<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\LearningPortal;

class AddLearningPortal extends Component
{
    use WithFileUploads;
    public $title;
    public $category;
    public $file;
    public $url;
    protected $rules = [
        'title' => 'required|min:6|max:255',
        'category' => 'required|min:6|max:255',
        'file' => 'required|image|max:1024', // 1MB Max
        'url' => 'required|min:10|max:255',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $this->validate();

        $path = $this->file->store('pictures/learning-portal', 'custom');
        $path = route('home').'/uploads'.'/'.$path;
        
        LearningPortal::create([
            'thumbnail' => $path,
            'title' => $this->title,
            'category' => $this->category,
            'url' => $this->url,
            'status' => null,
        ]);

        session()->flash('page-message', 'Learning portal resource successfully added.');
    }

    public function render()
    {
        return view('livewire.add-learning-portal');
    }
}

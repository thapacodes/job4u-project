<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Page;

class CreatePage extends Component
{
    use WithFileUploads;
    public $title;
    public $type;
    public $description = 'Write some page description';
    protected $rules = [
        'title' => 'required|min:6|max:255',
        'type' => 'required|unique:pages,type|min:2|max:255',
        'description' => 'required|min:2|max:4294967200',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $this->validate();

        $slug = preg_replace('/\s+/', '-', $this->title);
        
        Page::create([
            'title' => $this->title,
            'type' => $this->type,
            'description' => $this->description,
            'slug' => $slug,
            'status' => null,
        ]);

        session()->flash('page-message', 'Page Successfully Added');
    }

    public function render()
    {
        return view('livewire.create-page');
    }
}

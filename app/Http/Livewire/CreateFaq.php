<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\FAQ;

class CreateFaq extends Component
{
    use WithFileUploads;
    public $question;
    public $description = 'Write some answer';

    protected $rules = [
        'question' => 'required|unique:f_a_q_s,answer|min:6|max:255',
        'description' => 'required|min:2|max:4294967200',
    ];

    public function updated($propertyName) {
        $this->validateOnly($propertyName);
    }

    public function submit() {
        $this->validate();
        
        FAQ::create([
            'question' => $this->title,
            'answer' => $this->description,
            'status' => null,
        ]);

        session()->flash('page-message', 'Faq successfully added.');
    }

    public function render()
    {
        return view('livewire.create-faq');
    }
}

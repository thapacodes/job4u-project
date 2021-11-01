<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $description;

    protected $rules = [
        'name' => 'nullable|max:160',
        'email' => 'required|email|min:4|max:255',
        'subject' => 'required|string|min:4|max:255',
        'description' => 'required|string|min:4|max:2055',
    ];

    
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save() {
        $validatedData = $this->validate();
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'description' => $this->description
        ]);
        session()->flash('page-message', 'Message Successfully sent.');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}

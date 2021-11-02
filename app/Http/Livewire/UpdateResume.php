<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\WithFileUploads;

class UpdateResume extends Component
{
    use WithFileUploads;

    public $avater;
    public $resume;
    public $user_id;

    protected $rules = [
        'avater' => 'required|mimes:pdf|max:61440',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save() {
        $this->validate();
        $path = $this->avater->store('files/resume', 'custom');
        $path = route('home').'/uploads'.'/'.$path;

        $user = User::find($this->user_id);
        $user->resume = $path;

        $user->save();
        session()->flash('page-message', 'Resume successfully Updated.');
    }

    public function render()
    {
        return view('livewire.update-resume');
    }
}

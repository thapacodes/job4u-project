<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class ChangeProfilePicture extends Component
{
    use WithFileUploads;

    public $avater;
    public $user_id;

    protected $rules = [
        'avater' => 'required|image|max:1024',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save() {
        $this->validate();
        $path = $this->avater->store('pictures/profile', 'custom');
        $path = route('home').'/uploads'.'/'.$path;

        $user = User::find($this->user_id);
        $user->avater = $path;

        $user->save();
        session()->flash('page-message', 'Profile picture successfully Updated.');
    }

    public function render()
    {
        return view('livewire.change-profile-picture');
    }
}

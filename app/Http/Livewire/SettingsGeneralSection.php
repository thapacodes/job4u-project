<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class SettingsGeneralSection extends Component
{
    public $name;
    public $contact;
    public $education;
    public $experience;
    public $skill;
    public $address;
    public $about;
    public $user_id;


    protected $rules = [
        'name' => 'required|min:4|max:255',
        'contact' => 'nullable|max:255',
        'education' => 'nullable|max:255',
        'skill' => 'nullable|max:20000',
        'address' => 'nullable|max:20000',
        'about' => 'nullable|max:20000'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save() {
        $this->validate();
        $user = User::find($this->user_id);

        $user->name = is_null($this->name) ? $user->name : $this->name;
        $user->contact = is_null($this->contact) ? $user->contact : $this->contact;
        $user->education = is_null($this->education) ? $user->education : $this->education;
        $user->skill = is_null($this->skill) ? $user->skill : $this->skill;
        $user->address = is_null($this->address) ? $user->address : $this->address;
        $user->about = is_null($this->about) ? $user->about : $this->about;

        $user->save();
        
        session()->flash('page-message', 'Profile successfully Updated.');
    }

    public function render()
    {
        return view('livewire.settings-general-section');
    }
}

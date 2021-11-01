<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SettingsPasswordSection extends Component
{
    public $user_id;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'password' => 'required|confirmed|min:4|max:255',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $this->validate();

        $user = User::find($this->user_id);

        $user->password = is_null($this->password) ? $user->password : Hash::make($this->password);

        $user->save();
        
        session()->flash('page-message', 'Password successfully changed.');
    }

    public function render()
    {
        return view('livewire.settings-password-section');
    }
}

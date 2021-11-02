<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\ApplyForJob;
use App\Http\Resources\ApplyForJobResource;

class JobAppliedForSeeker extends Component
{

    public $user_email;

    public function render()
    {
        return view('livewire.job-applied-for-seeker', [
            'pageArray' => ApplyForJobResource::collection(ApplyForJob::where('email', 'like', $this->user_email)
            ->paginate(10)),
        ]);
    }
}

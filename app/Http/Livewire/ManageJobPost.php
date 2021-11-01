<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Job;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ManageJobPost extends Component
{
    public $search;
    public $what_search = 'title';

    use WithPagination;

    protected $queryString = [
        'search' => ['except'=> ''],
    ];

    public function updatedSearch() {
        $this->resetPage();
    }

    public function delete($id) {
        DB::table('jobs')->where('id', $id)->delete();
        session()->flash('page-message', 'User successfully deleted.');
        $this->mount();
        $this->render();
    }

    public function approved($id) {
        $email = User::where('id', $id)->get()[0]['email'];
        Mail::to($email)->send(new VerifiedUserMail());
        DB::table('users')->where('id', $id)->update(['approval' => 'true']);
        session()->flash('approve-message', 'User Successfully approved.');
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.manage-job-post', [
            'pageArray' => Job::where($this->what_search, 'like', $search)->paginate(10),
        ]);
    }
}

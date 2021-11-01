<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ManageUser extends Component
{
    public $search;
    public $what_search = 'name';

    use WithPagination;

    protected $queryString = [
        'search' => ['except'=> ''],
    ];

    public function updatedSearch() {
        $this->resetPage();
    }

    public function delete($id) {
        DB::table('users')->where('id', $id)->delete();
        session()->flash('page-message', 'User successfully deleted.');
        $this->mount();
        $this->render();
    }

    public function approved($id) {
        $status = Job::where('id', $id)->get()[0]['status'];
        if ($status != 'approve') {
            DB::table('jobs')->where('id', $id)->update(['status' => 'approve']);
            session()->flash('approve-message', 'Job Approved');
            // When your Job is Approved Sent Notification
        }
        else {
            DB::table('jobs')->where('id', $id)->update(['status' => '']);
            session()->flash('approve-message', 'Job Not Approved');
            // When your Job is Not Approved Sent Notification
        }
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.manage-user', [
            'pageArray' => User::where($this->what_search, 'like', $search)->paginate(10),
        ]);
    }
}

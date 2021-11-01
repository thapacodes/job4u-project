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
        $status = Job::where('id', $id)->get()[0]['status'];
        if ($status != 'approve') {
            DB::table('jobs')->where('id', $id)->update(['status' => 'approve']);
            session()->flash('approve-message', 'Job Post Approved');
        }
        else {
            DB::table('jobs')->where('id', $id)->update(['status' => '']);
            session()->flash('approve-message', 'Job Post Disapproved');
        }
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

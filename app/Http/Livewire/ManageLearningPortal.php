<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\LearningPortal;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ManageLearningPortal extends Component
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
        DB::table('learning_portals')->where('id', $id)->delete();
        session()->flash('page-message', 'Learning Portal resources deleted.');
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.manage-learning-portal', [
            'pageArray' => LearningPortal::where($this->what_search, 'like', $search)->paginate(10),
        ]);
    }
}

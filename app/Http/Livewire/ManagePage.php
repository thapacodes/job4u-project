<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Page;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ManagePage extends Component
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
        DB::table('pages')->where('id', $id)->delete();
        session()->flash('page-message', 'Page successfully deleted.');
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.manage-page', [
            'pageArray' => Page::where($this->what_search, 'like', $search)->paginate(10),
        ]);
    }
}

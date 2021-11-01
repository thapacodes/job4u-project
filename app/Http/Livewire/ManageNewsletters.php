<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\NewsLetters;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ManageNewsletters extends Component
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
        DB::table('news_letters')->where('id', $id)->delete();
        session()->flash('page-message', 'User Newsletter deleted.');
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.manage-newsletters', [
            'pageArray' => NewsLetters::where($this->what_search, 'like', $search)->paginate(10),
        ]);
    }
}

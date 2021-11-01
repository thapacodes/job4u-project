<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FAQ;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;

class ManageFaq extends Component
{
    public $search;
    public $what_search = 'question';

    use WithPagination;

    protected $queryString = [
        'search' => ['except'=> ''],
    ];

    public function updatedSearch() {
        $this->resetPage();
    }

    public function delete($id) {
        DB::table('f_a_q_s')->where('id', $id)->delete();
        session()->flash('page-message', 'FAQ deleted.');
        $this->mount();
        $this->render();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.manage-faq', [
            'pageArray' => FAQ::where($this->what_search, 'like', $search)->paginate(10),
        ]);
    }
}
